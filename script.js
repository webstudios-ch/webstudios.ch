document.addEventListener('DOMContentLoaded', function () {

// --- 1. Mobile Menu Toggle ---
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

    // --- Fade-in Animation on Scroll ---
    const targets = document.querySelectorAll('.fade-in-up');
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { root: null, threshold: 0.1 });
    targets.forEach(target => { observer.observe(target); });

    // --- Logik für Kontaktformular-Checkbox (nur auf kontakt.html relevant) ---
    const hasWebsiteCheckbox = document.getElementById('has-website');
    const websiteUrlField = document.getElementById('website-url-field');
    if (hasWebsiteCheckbox && websiteUrlField) {
        hasWebsiteCheckbox.addEventListener('change', function() {
            if (this.checked) {
                websiteUrlField.classList.remove('hidden');
                websiteUrlField.querySelector('input').required = true;
            } else {
                websiteUrlField.classList.add('hidden');
                websiteUrlField.querySelector('input').required = false;
            }
        });
    }

    // --- Logik für Prozess-Accordion (nur auf prozess.html relevant) ---
    const accordionToggles = document.querySelectorAll('.accordion-toggle');
    accordionToggles.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.accordion-icon');
            const isOpening = !content.style.maxHeight;

            accordionToggles.forEach(otherButton => {
                if (otherButton !== button) {
                    otherButton.nextElementSibling.style.maxHeight = null;
                    const otherIcon = otherButton.querySelector('.accordion-icon');
                    if (otherIcon) otherIcon.classList.remove('rotate-180');
                }
            });

            if (isOpening) {
                content.style.maxHeight = content.scrollHeight + "px";
                if (icon) icon.classList.add('rotate-180');
            } else {
                content.style.maxHeight = null;
                if (icon) icon.classList.remove('rotate-180');
            }
        });
    });

    // --- Logik für AI-Empfehler (nur auf services.html relevant) ---
    const startBtn = document.getElementById('start-recommender-btn');
    const recommenderStart = document.getElementById('recommender-start');
    const recommenderUI = document.getElementById('recommender-ui');
    const resultDisplay = document.getElementById('result-display');
    const steps = document.querySelectorAll('.rec-step');
    const nextBtns = document.querySelectorAll('.next-step-btn');
    const prevBtns = document.querySelectorAll('.prev-step-btn');
    const showRecommendationBtn = document.getElementById('show-recommendation-btn');
    const restartBtn = document.getElementById('restart-recommender-btn');
    const resultCtaButton = document.getElementById('result-cta-button'); // Button im Ergebnis
    const allCardsIds = ['starter-card', 'business-card', 'premium-card'];

    let currentStep = 0;

    function showStep(stepIndex) {
        if (!recommenderUI) return;
        recommenderUI.style.opacity = 0;
        setTimeout(() => {
            steps.forEach((step, index) => {
                step.classList.toggle('hidden', index !== stepIndex);
            });
            recommenderUI.style.opacity = 1;
            currentStep = stepIndex;
        }, 150);
    }

    function resetRecommender() {
         if (!recommenderStart || !recommenderUI || !resultDisplay) return;

         // Reset UI visibility
         resultDisplay.classList.add('hidden');
         recommenderUI.classList.add('hidden');
         recommenderStart.style.display = 'block'; // Make start visible again
         recommenderStart.style.opacity = 1;

         // Reset Highlights on all cards
         allCardsIds.forEach(cardId => {
             const card = document.getElementById(cardId);
             if (card) {
                 card.classList.remove('recommended-highlight');
                 // Reset scaling potentially added by highlight
                 card.style.transform = ''; // Clear inline transform style
             }
         });

         // Reset form inputs
         const radioButtons = recommenderUI.querySelectorAll('input[type="radio"]');
         radioButtons.forEach(radio => radio.checked = false);
         const checkBoxes = recommenderUI.querySelectorAll('input[type="checkbox"]');
         checkBoxes.forEach(checkbox => checkbox.checked = false);

         currentStep = 0;
    }

    if (startBtn && recommenderStart && recommenderUI) {
        startBtn.addEventListener('click', () => {
            // Hide start section smoothly and show first step
            recommenderStart.style.opacity = 0;
             setTimeout(() => {
                 recommenderStart.style.display = 'none'; // Use display none after fade out
                 recommenderUI.classList.remove('hidden');
                 showStep(0);
             }, 200); // Wait for fade out
        });
    }

    nextBtns.forEach(button => {
        button.addEventListener('click', () => {
            const currentStepElement = steps[currentStep];
            const radioSelected = currentStepElement.querySelector('input[type="radio"]:checked');
            if (currentStepElement.querySelector('input[type="radio"]') && !radioSelected) {
                alert("Bitte treffen Sie eine Auswahl.");
                return;
            }
            if (currentStep < steps.length - 1) {
                showStep(currentStep + 1);
            }
        });
    });

    prevBtns.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep > 0) {
                showStep(currentStep - 1);
            }
        });
    });

    if (restartBtn) {
        restartBtn.addEventListener('click', resetRecommender);
    }

    // Event listener for the result CTA button to smoothly scroll
    if (resultCtaButton) {
        resultCtaButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor jump
            const targetId = this.getAttribute('href'); // Gets '#starter-card', etc.
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    }


    if (showRecommendationBtn && resultDisplay && recommenderUI) {
        showRecommendationBtn.addEventListener('click', () => {
            let score = 0;
            const reasons = [];

            // Validation and score calculation (same as before)
            const pageCountRadio = document.querySelector('input[name="page-count"]:checked');
            if (!pageCountRadio) { alert("Bitte beantworten Sie Frage 1."); return; }
            score += parseInt(pageCountRadio.value);

            const designNeedRadio = document.querySelector('input[name="design-need"]:checked');
            if (!designNeedRadio) { alert("Bitte beantworten Sie Frage 2."); return; }
            score += parseInt(designNeedRadio.value);

            const featureCheckboxes = document.querySelectorAll('.feature-checkbox:checked');
            let featureScore = 0;
            let noFeaturesSelected = false;
            if (featureCheckboxes.length === 0) { alert("Bitte wählen Sie mindestens eine Option bei Frage 3."); return; }

            featureCheckboxes.forEach(checkbox => {
                 if(checkbox.id === 'feature-none') { noFeaturesSelected = true; }
                 else {
                    featureScore += parseInt(checkbox.value);
                    if (checkbox.id === 'feature-ecommerce') reasons.push("einen Online-Shop benötigen");
                    if (checkbox.id === 'feature-cms') reasons.push("Inhalte selbst bearbeiten möchten");
                 }
            });

            if (noFeaturesSelected && featureCheckboxes.length > 1) {
                 alert("Bitte wählen Sie entweder spezifische Funktionen ODER 'Keine besonderen Funktionen'."); return;
            }
            score += featureScore;

            // Determine recommendation
            let recommendation = 'starter';
            let recommendedPackageId = 'starter-card';
            if (score >= 10) {
                recommendation = 'premium';
                recommendedPackageId = 'premium-card';
            } else if (score >= 5) {
                recommendation = 'business';
                recommendedPackageId = 'business-card';
            }

            // Determine reason text (same as before)
            let reasonText = `Basierend auf Ihren Angaben zu Umfang und Design.`;
            if (recommendation === 'premium') {
                reasonText = `Da Sie ${reasons.length > 0 ? reasons.join(' und ') + ' sowie' : ''} eine umfassende Lösung suchen, ist Premium ideal.`;
            } else if (recommendation === 'business') {
                 reasonText = `Für eine Webseite mit ${pageCountRadio.value <= 5 ? 'bis zu 5 Seiten' : 'mehreren Seiten'} ${reasons.length > 0 ? 'und weil Sie ' + reasons.join(' und ') : ''} passt das Business-Paket am besten.`;
             } else {
                 reasonText = `Für eine kompakte Webseite ohne spezielle Zusatzfunktionen ist das Starter-Paket perfekt.`;
             }

            // --- UPDATE UI ---
            // Reset state (hides results, shows start, removes highlights)
            resetRecommender();

            // Update result display text elements
            const recommendedPackageName = document.getElementById('recommended-package-name');
            const recommendationReason = document.getElementById('recommendation-reason');

            recommendedPackageName.textContent = recommendation.charAt(0).toUpperCase() + recommendation.slice(1);
            recommendationReason.textContent = reasonText;
            resultCtaButton.setAttribute('href', `#${recommendedPackageId}`); // Set target for smooth scroll

            // Show result display (hide questions and start button)
            recommenderUI.classList.add('hidden');
            recommenderStart.style.display = 'none'; // Ensure start is hidden
            resultDisplay.classList.remove('hidden');
            resultDisplay.style.opacity = 0;
            setTimeout(() => { resultDisplay.style.opacity = 1; }, 50);

            // Add highlight to the recommended card (NO SCROLL HERE)
            const recommendedCard = document.getElementById(recommendedPackageId);
            if (recommendedCard) {
                recommendedCard.classList.add('recommended-highlight');
            }
            // --- END UPDATE UI ---
        });
    }

}); // Ende DOMContentLoaded
