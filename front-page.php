<?php
/**
 * The front page template file
 * Speed Épaviste Pro - Professional car removal service
 */
get_header(); 
?>

<main id="primary" class="site-main" role="main">
    
    <!-- Hero Section -->
    <section class="hero-section" aria-label="Service d'enlèvement d'épave gratuit en Île-de-France">
        <div class="container">
            <div class="hero-content animate-slide-up">
                <h1 class="hero-title">
                    Enlèvement d'épave <strong>100% GRATUIT</strong> en Île-de-France
                </h1>
                <p class="hero-subtitle">
                    Service d'épaviste agréé VHU • Intervention 7j/7 • Certificat de destruction offert • Démarches administratives incluses
                </p>
                <div class="hero-cta">
                    <a href="tel:0624930536" class="btn btn-call btn-large">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        Appeler Maintenant - 06 24 93 05 36
                    </a>
                    <a href="#contact" class="btn btn-secondary btn-large">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Demander un Devis Gratuit
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Wave separator -->
        <div style="position: absolute; bottom: 0; left: 0; right: 0;">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto;">
                <path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" />
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" style="background: white;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Nos Services d'Épaviste Professionnel</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600); max-width: 600px; margin: 0 auto;">
                    Des solutions complètes pour l'enlèvement gratuit de votre véhicule hors d'usage
                </p>
            </div>
            
            <div class="service-grid">
                <div class="service-card">
                    <div class="service-icon">🚗</div>
                    <h3 class="service-title">Enlèvement Gratuit</h3>
                    <p class="service-description">
                        Service d'enlèvement 100% gratuit partout en Île-de-France, quel que soit l'état de votre véhicule
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3 class="service-title">Certificat VHU Officiel</h3>
                    <p class="service-description">
                        Certificat de destruction des véhicules hors d'usage conforme à la réglementation française
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🌍</div>
                    <h3 class="service-title">Recyclage Écologique</h3>
                    <p class="service-description">
                        Traitement environnemental responsable dans des centres agréés de démantèlement
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">⚡</div>
                    <h3 class="service-title">Intervention Rapide</h3>
                    <p class="service-description">
                        Intervention sous 24-48h, service d'urgence disponible 7 jours sur 7
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="features-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Comment ça marche ?</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    Un processus simple en 4 étapes pour votre enlèvement d'épave gratuit
                </p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="process-number">1</div>
                    <h3>Contactez-nous</h3>
                    <p>Appelez-nous au 06 24 93 05 36 ou remplissez notre formulaire en ligne avec les détails de votre véhicule</p>
                </div>
                
                <div class="process-step">
                    <div class="process-number">2</div>
                    <h3>Planification</h3>
                    <p>Nous planifions l'intervention selon vos disponibilités et préparons le matériel de remorquage adapté</p>
                </div>
                
                <div class="process-step">
                    <div class="process-number">3</div>
                    <h3>Enlèvement</h3>
                    <p>Notre équipe professionnelle procède à l'enlèvement sécurisé de votre véhicule à l'adresse indiquée</p>
                </div>
                
                <div class="process-step">
                    <div class="process-number">4</div>
                    <h3>Certificat</h3>
                    <p>Vous recevez votre certificat de destruction officiel et nous nous occupons des démarches administratives</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section" style="background: white;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Pourquoi Choisir Speed Épaviste ?</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    Les avantages de notre service d'épaviste professionnel agréé
                </p>
            </div>
            
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">🆓</div>
                    <div class="feature-content">
                        <h3>Service 100% Gratuit</h3>
                        <p>Aucun frais caché, aucune surprise. L'enlèvement, le transport et les démarches sont entièrement gratuits</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">🏆</div>
                    <div class="feature-content">
                        <h3>Épaviste Agréé VHU</h3>
                        <p>Entreprise certifiée et agréée pour le traitement des véhicules hors d'usage selon la réglementation</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">📍</div>
                    <div class="feature-content">
                        <h3>Toute l'Île-de-France</h3>
                        <p>Intervention dans les 8 départements : 75, 77, 78, 91, 92, 93, 94, 95</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">🔧</div>
                    <div class="feature-content">
                        <h3>Tous Types de Véhicules</h3>
                        <p>Voitures, motos, utilitaires, camping-cars... Quel que soit l'état ou la marque</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">📄</div>
                    <div class="feature-content">
                        <h3>Démarches Simplifiées</h3>
                        <p>Nous nous occupons de toutes les formalités administratives à votre place</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">⏰</div>
                    <div class="feature-content">
                        <h3>Disponible 7j/7</h3>
                        <p>Service d'urgence disponible week-ends et jours fériés pour les situations critiques</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Demandez Votre Enlèvement Gratuit</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    Contactez-nous dès maintenant pour votre enlèvement d'épave gratuit en Île-de-France
                </p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-form">
                    <h3 style="margin-bottom: 1.5rem; color: var(--gray-900);">Formulaire de Contact Rapide</h3>
                    
                    <form id="epaviste-contact-form">
                        <div class="form-group">
                            <label for="name" class="form-label">Nom complet *</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Téléphone *</label>
                            <input type="tel" id="phone" name="phone" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label for="address" class="form-label">Adresse du véhicule *</label>
                            <textarea id="address" name="address" rows="3" class="form-textarea" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="vehicle" class="form-label">Informations véhicule</label>
                            <textarea id="vehicle" name="vehicle" rows="3" class="form-textarea" placeholder="Marque, modèle, année, état..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                            </svg>
                            Envoyer ma Demande
                        </button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; color: var(--gray-900); margin-bottom: 0.5rem;">Téléphone</h4>
                            <p style="color: var(--gray-600); margin: 0;">
                                <a href="tel:0624930536" style="color: var(--primary-yellow-dark); font-weight: 600;">06 24 93 05 36</a>
                            </p>
                            <p style="color: var(--gray-500); font-size: 0.875rem; margin: 0;">Disponible 7j/7 - 24h/24</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; color: var(--gray-900); margin-bottom: 0.5rem;">Zone d'Intervention</h4>
                            <p style="color: var(--gray-600); margin: 0;">Toute l'Île-de-France</p>
                            <p style="color: var(--gray-500); font-size: 0.875rem; margin: 0;">Paris 75, 77, 78, 91, 92, 93, 94, 95</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; color: var(--gray-900); margin-bottom: 0.5rem;">Délai d'Intervention</h4>
                            <p style="color: var(--gray-600); margin: 0;">24h - 48h maximum</p>
                            <p style="color: var(--gray-500); font-size: 0.875rem; margin: 0;">Service d'urgence disponible</p>
                        </div>
                    </div>
                    
                    <div style="background: linear-gradient(135deg, var(--primary-yellow), var(--primary-yellow-dark)); color: var(--gray-900); padding: 2rem; border-radius: 1rem; text-align: center;">
                        <h3 style="margin-bottom: 1rem; color: var(--gray-900);">Engagement Service Gratuit</h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 0.5rem;">✅ Enlèvement 100% gratuit</li>
                            <li style="margin-bottom: 0.5rem;">✅ Certificat de destruction</li>
                            <li style="margin-bottom: 0.5rem;">✅ Démarches administratives</li>
                            <li style="margin-bottom: 0.5rem;">✅ Aucun frais caché</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
// Enhanced contact form with validation
document.getElementById('epaviste-contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();
    
    if (!name || !phone || !address) {
        alert('Veuillez remplir tous les champs obligatoires (nom, téléphone, adresse).');
        return;
    }
    
    // Phone validation
    const phoneRegex = /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/;
    if (!phoneRegex.test(phone)) {
        alert('Veuillez saisir un numéro de téléphone français valide.');
        return;
    }
    
    // Success simulation
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span>Envoi en cours...</span>';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        alert('Merci pour votre demande ! Nous vous contacterons dans les plus brefs délais pour organiser l\'enlèvement gratuit de votre véhicule.');
        this.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 1500);
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<?php get_footer(); ?>