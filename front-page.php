<?php
/**
 * The front page template file
 * Speed Épaviste Pro - Professional car removal service
 */
get_header(); 
?>

<main id="primary" class="site-main" role="main">
    
    <!-- Hero Section -->
    <section class="hero-section-new" aria-label="Service d'enlèvement d'épave gratuit en Île-de-France">
        <div class="container">
            <div class="hero-content-new animate-slide-up">
                <h1 class="hero-main-title">
                    Services Épaviste Agréé VHU en France - Enlèvement d'Épave Gratuit
                </h1>
                <div class="hero-description">
                    <p class="hero-intro">Speed Épaviste, expert agréé VHU depuis 2015, propose une <strong class="text-highlight">couverture nationale en France pour l'enlèvement, le rachat et la destruction écologique de vos véhicules hors d'usage</strong> dans tous les départements d'Île-de-France.</p>
                    
                    <ul class="hero-features">
                        <li><strong>Service Gratuit</strong> - enlèvement d'épave gratuit par épaviste agréé en France</li>
                        <li><strong>Intervention 7j/7</strong> - dans toute la France avec dépanneurs professionnels certifiés</li>
                        <li><strong>Meilleur Prix</strong> - rachat de véhicule accidenté et épave au meilleur prix</li>
                        <li><strong>Éco-responsable</strong> - centre VHU agréé pour destruction écologique</li>
                        <li><strong>Démarches administratives incluses</strong> - certificat de destruction officiel</li>
                        <li><strong>Compatible prime à la conversion</strong> - estimation gratuite en ligne</li>
                    </ul>
                </div>
                
                <div class="hero-cta-new">
                    <a href="tel:0607380194" class="btn-hero-call">
                        📞 06 07 38 01 94
                    </a>
                </div>
            </div>
        </div>
        
        <!-- SEO Rich Snippet -->
        <div itemscope itemtype="https://schema.org/LocalBusiness" style="display:none;">
            <span itemprop="name">Speed Épaviste</span>
            <span itemprop="description">Service professionnel d'enlèvement d'épaves automobiles gratuit en Île-de-France</span>
            <span itemprop="telephone">0607380194</span>
            <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="addressRegion">Île-de-France</span>
            </span>
            <span itemprop="priceRange">Gratuit</span>
            <span itemprop="openingHours" content="Mo-Su 07:00-22:00">Ouvert 7j/7 de 7h à 22h</span>
        </div>
        
        <!-- Wave separator -->
        <div style="position: absolute; bottom: 0; left: 0; right: 0;">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto;">
                <path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" />
            </svg>
        </div>
    </section>

    <!-- SEO Content Section -->
    <section class="seo-content-section" style="background: #f8f9fa; padding: 3rem 0;">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 2rem; color: var(--gray-900);">Enlèvement d'Épaves Automobiles Gratuit en Île-de-France</h2>
            
            <div class="seo-grid">
                <div class="seo-text">
                    <p>Speed Épaviste est votre spécialiste de l'<strong>enlèvement gratuit d'épaves automobiles</strong> dans toute l'Île-de-France. Agréés par l'État pour le traitement des Véhicules Hors d'Usage (VHU), nous proposons un service complet incluant l'enlèvement rapide de votre véhicule, la gestion des démarches administratives et la délivrance du certificat de destruction obligatoire.</p>
                    
                    <p>Que votre voiture soit accidentée, en panne irréparable, trop vieille ou simplement inutilisée, notre équipe d'<strong>épavistes professionnels</strong> intervient rapidement à votre domicile, sur votre lieu de travail ou partout où se trouve votre véhicule dans les départements 75, 77, 78, 91, 92, 93, 94 et 95.</p>
                    
                    <h3 style="margin-top: 1.5rem;">Pourquoi choisir un épaviste agréé ?</h3>
                    <p>Le choix d'un centre VHU agréé comme Speed Épaviste garantit :</p>
                    <ul>
                        <li>Un <strong>recyclage écologique</strong> conforme à la réglementation française</li>
                        <li>La <strong>démarche administrative simplifiée</strong> (certificat de destruction, déclaration à la préfecture)</li>
                        <li>La <strong>gratuité totale</strong> du service (aucun frais caché)</li>
                        <li>La <strong>traçabilité</strong> du traitement de votre véhicule</li>
                    </ul>
                </div>
                
                <div class="seo-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/epaviste-professionnel.jpg" alt="Épaviste professionnel enlevant un véhicule en Île-de-France" loading="lazy" style="border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                </div>
            </div>
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
                    <p>Appelez-nous au 06 07 38 01 94 ou remplissez notre formulaire en ligne avec les détails de votre véhicule</p>
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

    <!-- Zones Section -->
    <section class="zones-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Zones d'Intervention en Île-de-France</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    Service d'épaviste disponible dans tous les départements franciliens
                </p>
            </div>
            
            <div class="zones-grid">
                <div class="zone-card">
                    <div class="zone-number">75</div>
                    <h3>Paris</h3>
                    <p>Intervention dans tous les arrondissements de Paris, enlèvement rapide et certificat VHU</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">77</div>
                    <h3>Seine-et-Marne</h3>
                    <p>Meaux, Melun, Fontainebleau et toutes les communes du département</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">78</div>
                    <h3>Yvelines</h3>
                    <p>Versailles, Saint-Germain-en-Laye, Poissy et environs</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">91</div>
                    <h3>Essonne</h3>
                    <p>Évry, Palaiseau, Corbeil-Essonnes et toute la région sud</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">92</div>
                    <h3>Hauts-de-Seine</h3>
                    <p>Nanterre, Boulogne, Courbevoie et la petite couronne ouest</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">93</div>
                    <h3>Seine-Saint-Denis</h3>
                    <p>Saint-Denis, Montreuil, Aubervilliers et le nord-est</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">94</div>
                    <h3>Val-de-Marne</h3>
                    <p>Créteil, Vincennes, Vitry-sur-Seine et le sud-est</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">95</div>
                    <h3>Val-d'Oise</h3>
                    <p>Pontoise, Argenteuil, Sarcelles et tout le nord</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Épaves Récupérées</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Départements Couverts</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24h</div>
                    <div class="stat-label">Intervention Rapide</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Satisfaction Client</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Témoignages Clients</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    L'expérience de nos clients avec notre service d'épaviste agréé
                </p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                    <div class="testimonial-stars" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <meta itemprop="ratingValue" content="5">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p itemprop="reviewBody">"Service rapide et professionnel. Mon épave a été enlevée le lendemain de mon appel. Le certificat de destruction est arrivé par email 2 jours après. Je recommande vivement Speed Épaviste !"</p>
                    <div class="testimonial-author" itemprop="author">- Marie D., Paris 11ème</div>
                </div>
                
                <div class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                    <div class="testimonial-stars" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <meta itemprop="ratingValue" content="5">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p itemprop="reviewBody">"Excellent service, gratuit comme promis. Le certificat de destruction a été envoyé rapidement. L'équipe est très professionnelle et a enlevé ma vieille voiture en moins de 30 minutes."</p>
                    <div class="testimonial-author" itemprop="author">- Pierre L., Créteil</div>
                </div>
                
                <div class="testimonial-card" itemscope itemtype="https://schema.org/Review">
                    <div class="testimonial-stars" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <meta itemprop="ratingValue" content="5">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p itemprop="reviewBody">"Très satisfait de Speed Épaviste. Ma voiture accidentée a été enlevée gratuitement alors qu'elle ne roulait plus depuis 2 ans. L'équipe est ponctuelle et ils gèrent toutes les démarches."</p>
                    <div class="testimonial-author" itemprop="author">- Sophie M., Versailles</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Questions Fréquentes</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    Retrouvez les réponses aux questions les plus courantes sur notre service d'épaviste
                </p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Le service est-il vraiment gratuit ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Oui, notre service d'enlèvement d'épave est 100% gratuit. Aucun frais n'est facturé pour l'enlèvement, le transport, le certificat de destruction ou les démarches administratives. Nous sommes rémunérés par la revente des matériaux recyclables conformément à la réglementation sur les VHU (Véhicules Hors d'Usage).</p>
                            <p>Attention aux arnaques : certains "épavistes" non agréés facturent des frais cachés ou ne fournissent pas de certificat de destruction valide. Speed Épaviste est un centre VHU officiellement agréé par l'État.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Quels documents faut-il fournir ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Pour procéder à l'enlèvement de votre véhicule, vous devez fournir :</p>
                            <ul>
                                <li>La <strong>carte grise originale</strong> du véhicule (certificat d'immatriculation)</li>
                                <li>Une <strong>pièce d'identité</strong> valide (carte nationale d'identité, passeport ou permis de conduire)</li>
                                <li>Si vous n'êtes pas le propriétaire : une <strong>procuration signée</strong> par le propriétaire accompagnée d'une copie de sa pièce d'identité</li>
                            </ul>
                            <p>Pour les véhicules sans carte grise (perdue ou volée), contactez-nous pour connaître la procédure spécifique.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Dans quel état doit être le véhicule ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Nous acceptons tous types de véhicules, quel que soit leur état :</p>
                            <ul>
                                <li>Véhicules accidentés ou endommagés</li>
                                <li>Véhicules en panne irréparable</li>
                                <li>Véhicules trop vieux ou ne passant plus le contrôle technique</li>
                                <li>Véhicules sans moteur ou avec des pièces manquantes</li>
                                <li>Véhicules rouillés ou hors d'état de marche</li>
                            </ul>
                            <p>Le véhicule doit être complet (carrosserie, châssis) mais peut être dépourvu de certaines pièces (moteur, roues, etc.). Si le véhicule est en plusieurs morceaux, merci de nous le préciser lors de la prise de rendez-vous.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Combien de temps pour obtenir le certificat ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Le certificat de destruction VHU vous est généralement transmis :</p>
                            <ul>
                                <li><strong>Le jour même</strong> : sous forme numérique par email dans la plupart des cas</li>
                                <li><strong>Sous 7 jours maximum</strong> : version papier par courrier si vous en faites la demande</li>
                            </ul>
                            <p>Ce document officiel est indispensable pour :</p>
                            <ul>
                                <li>Déclarer la destruction à votre assurance</li>
                                <li>Effectuer les démarches auprès de la préfecture si nécessaire</li>
                                <li>Justifier que vous n'êtes plus propriétaire du véhicule</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Que deviennent les véhicules après enlèvement ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Conformément à la réglementation sur les VHU, tous les véhicules que nous enlevons sont traités dans des centres agréés selon un processus strict :</p>
                            <ol>
                                <li><strong>Dépollution</strong> : extraction des fluides dangereux (huile, liquide de refroidissement, carburant)</li>
                                <li><strong>Démontage</strong> : récupération des pièces réutilisables</li>
                                <li><strong>Broyage</strong> : destruction du véhicule et séparation des matériaux</li>
                                <li><strong>Recyclage</strong> : valorisation des métaux, plastiques et autres matériaux</li>
                            </ol>
                            <p>Ce processus garantit un traitement écologique responsable avec un taux de recyclage supérieur à 95% conforme à la réglementation européenne.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Puis-je faire enlever un véhicule sans carte grise ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Oui, il est possible de faire enlever un véhicule sans carte grise, mais la procédure est différente :</p>
                            <ul>
                                <li>Si la carte grise est <strong>perdue</strong> : vous devrez faire une déclaration de perte et fournir une copie si possible</li>
                                <li>Si la carte grise est <strong>volée</strong> : fournir le récépissé de plainte</li>
                                <li>Si vous n'êtes pas le propriétaire et que le véhicule est <strong>abandonné</strong> : procédure spécifique selon la situation</li>
                            </ul>
                            <p>Dans tous les cas, contactez-nous pour étudier votre situation particulière. Nous pourrons vous conseiller sur les démarches à effectuer.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Quelles sont vos zones d'intervention exactes ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Nous intervenons dans toute l'Île-de-France, y compris :</p>
                            <ul>
                                <li><strong>Paris (75)</strong> : tous les arrondissements</li>
                                <li><strong>Seine-et-Marne (77)</strong> : Meaux, Melun, Chelles, Fontainebleau, etc.</li>
                                <li><strong>Yvelines (78)</strong> : Versailles, Saint-Germain-en-Laye, Mantes-la-Jolie, etc.</li>
                                <li><strong>Essonne (91)</strong> : Évry, Corbeil-Essonnes, Massy, Palaiseau, etc.</li>
                                <li><strong>Hauts-de-Seine (92)</strong> : Nanterre, Boulogne-Billancourt, Courbevoie, etc.</li>
                                <li><strong>Seine-Saint-Denis (93)</strong> : Saint-Denis, Montreuil, Aubervilliers, etc.</li>
                                <li><strong>Val-de-Marne (94)</strong> : Créteil, Vincennes, Vitry-sur-Seine, etc.</li>
                                <li><strong>Val-d'Oise (95)</strong> : Cergy, Argenteuil, Sarcelles, etc.</li>
                            </ul>
                            <p>Nous couvrons également certaines communes limitrophes en région parisienne. Contactez-nous pour confirmer que nous intervenons dans votre ville.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-question" onclick="toggleFAQ(this)" itemprop="name">
                        Quelles sont vos horaires d'intervention ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <p>Nos horaires standard sont :</p>
                            <ul>
                                <li><strong>Lundi au vendredi</strong> : 8h - 20h</li>
                                <li><strong>Samedi</strong> : 9h - 18h</li>
                                <li><strong>Dimanche</strong> : 10h - 16h (service premium avec supplément)</li>
                            </ul>
                            <p>Nous proposons également un <strong>service d'urgence</strong> en dehors de ces horaires pour les situations particulières (véhicule gênant la voie publique, etc.). Des frais supplémentaires peuvent s'appliquer pour les interventions en dehors des horaires standards.</p>
                            <p>Notre standard téléphonique est ouvert 7j/7 de 8h à 22h au 06 07 38 01 94.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="<?php echo home_url('/faq'); ?>" class="btn btn-secondary">
                    Voir toutes les FAQ
                </a>
            </div>
        </div>
    </section>

    <!-- SEO Bottom Content -->
    <section class="seo-bottom-section" style="background: #f8f9fa; padding: 3rem 0;">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 2rem; color: var(--gray-900);">Enlèvement d'Épave Gratuit - Speed Épaviste Île-de-France</h2>
            
            <div class="seo-bottom-content">
                <h3>Professionnels de l'enlèvement d'épaves automobiles en Île-de-France</h3>
                <p>Speed Épaviste est votre partenaire de confiance pour l'<strong>enlèvement gratuit d'épaves automobiles</strong> dans toute la région Île-de-France. Notre service complet et professionnel vous permet de vous débarrasser facilement de votre véhicule hors d'usage tout en respectant toutes les obligations légales.</p>
                
                <h3>Un service rapide et écologique</h3>
                <p>Notre engagement : un service <strong>rapide, gratuit et écologique</strong>. En choisissant Speed Épaviste, vous optez pour :</p>
                <ul>
                    <li>Une intervention sous <strong>24 à 48 heures</strong> en moyenne</li>
                    <li>Un enlèvement <strong>sans frais</strong>, quel que soit l'état du véhicule</li>
                    <li>Un traitement <strong>respectueux de l'environnement</strong> dans des centres agréés</li>
                    <li>La gestion complète des <strong>démarches administratives</strong></li>
                </ul>
                
                <h3>Les différents types de véhicules que nous enlevons</h3>
                <p>Nous prenons en charge tous types de véhicules, notamment :</p>
                <ul>
                    <li><strong>Voitures particulières</strong> (essence, diesel, électriques, hybrides)</li>
                    <li><strong>Véhicules utilitaires légers</strong> (moins de 3,5 tonnes)</li>
                    <li><strong>Deux-roues motorisés</strong> (motos, scooters)</li>
                    <li><strong>Camping-cars</strong> de petite taille</li>
                    <li><strong>Véhicules accidentés</strong> ou endommagés</li>
                </ul>
                
                <h3>Comment préparer votre véhicule pour l'enlèvement ?</h3>
                <p>Pour faciliter l'intervention de nos équipes :</p>
                <ol>
                    <li>Retirez vos <strong>effets personnels</strong> du véhicule</li>
                    <li>Préparez les <strong>documents nécessaires</strong> (carte grise, pièce d'identité)</li>
                    <li>Si possible, <strong>dégagez l'accès</strong> au véhicule</li>
                    <li>Signalez-nous tout <strong>danger particulier</strong> (fuite de carburant, etc.)</li>
                </ol>
                
                <p>Notre équipe d'<strong>épavistes professionnels</strong> est à votre disposition 7 jours sur 7 pour répondre à toutes vos questions et organiser l'enlèvement de votre véhicule. Contactez-nous dès maintenant au <strong>06 07 38 01 94</strong> ou via notre formulaire de contact pour un devis gratuit et sans engagement.</p>
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
                                <a href="tel:0607380194" style="color: var(--primary-yellow-dark); font-weight: 600;">06 07 38 01 94</a>
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
// FAQ Toggle functionality
function toggleFAQ(button) {
    const faqItem = button.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const icon = button.querySelector('.faq-icon');
    
    // Close all other FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.classList.remove('active');
            item.querySelector('.faq-answer').style.display = 'none';
        }
    });
    
    // Toggle current FAQ item
    if (faqItem.classList.contains('active')) {
        faqItem.classList.remove('active');
        answer.style.display = 'none';
    } else {
        faqItem.classList.add('active');
        answer.style.display = 'block';
    }
}

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

// Back to top button functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top');
    
    function updateBackToTop() {
        if (window.pageYOffset > 300) {
            backToTopButton.style.opacity = '1';
            backToTopButton.style.visibility = 'visible';
        } else {
            backToTopButton.style.opacity = '0';
            backToTopButton.style.visibility = 'hidden';
        }
    }

    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateBackToTop);
            ticking = true;
        }
        ticking = false;
    });

    if (backToTopButton) {
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
</script>

<?php get_footer(); ?>

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
                    <a href="tel:0607380194" class="btn btn-call btn-large">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        Appeler Maintenant - 06 07 38 01 94
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
                    <p>Appelez-nous au 06 07 38 01 94 ou remplissez notre formulaire en ligne avec les détails de votre véhicule</p>
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

    <!-- Zones Section -->
    <section class="zones-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Zones d'Intervention en Île-de-France</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    Service d'épaviste disponible dans tous les départements franciliens
                </p>
            </div>
            
            <div class="zones-grid">
                <div class="zone-card">
                    <div class="zone-number">75</div>
                    <h3>Paris</h3>
                    <p>Intervention dans tous les arrondissements de Paris, enlèvement rapide et certificat VHU</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">77</div>
                    <h3>Seine-et-Marne</h3>
                    <p>Meaux, Melun, Fontainebleau et toutes les communes du département</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">78</div>
                    <h3>Yvelines</h3>
                    <p>Versailles, Saint-Germain-en-Laye, Poissy et environs</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">91</div>
                    <h3>Essonne</h3>
                    <p>Évry, Palaiseau, Corbeil-Essonnes et toute la région sud</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">92</div>
                    <h3>Hauts-de-Seine</h3>
                    <p>Nanterre, Boulogne, Courbevoie et la petite couronne ouest</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">93</div>
                    <h3>Seine-Saint-Denis</h3>
                    <p>Saint-Denis, Montreuil, Aubervilliers et le nord-est</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">94</div>
                    <h3>Val-de-Marne</h3>
                    <p>Créteil, Vincennes, Vitry-sur-Seine et le sud-est</p>
                </div>
                
                <div class="zone-card">
                    <div class="zone-number">95</div>
                    <h3>Val-d'Oise</h3>
                    <p>Pontoise, Argenteuil, Sarcelles et tout le nord</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Épaves Récupérées</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Départements Couverts</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24h</div>
                    <div class="stat-label">Intervention Rapide</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Satisfaction Client</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Témoignages Clients</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    L'expérience de nos clients avec notre service d'épaviste agréé
                </p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    <p>"Service rapide et professionnel. Mon épave a été enlevée le lendemain de mon appel. Merci !"</p>
                    <div class="testimonial-author">- Marie D., Paris 11ème</div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    <p>"Excellent service, gratuit comme promis. Le certificat de destruction a été envoyé rapidement."</p>
                    <div class="testimonial-author">- Pierre L., Créteil</div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    <p>"Très satisfait de Speed Épaviste. L'équipe est ponctuelle et ils gèrent toutes les démarches."</p>
                    <div class="testimonial-author">- Sophie M., Versailles</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="color: var(--gray-900); margin-bottom: 1rem;">Questions Fréquentes</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600);">
                    Retrouvez les réponses aux questions les plus courantes sur notre service d'épaviste
                </p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        Le service est-il vraiment gratuit ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;">
                        <p>Oui, notre service d'enlèvement d'épave est 100% gratuit. Aucun frais n'est facturé pour l'enlèvement, le transport, le certificat de destruction ou les démarches administratives. Nous sommes rémunérés par la revente des matériaux recyclables.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        Quels documents faut-il fournir ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;">
                        <p>Vous devez fournir la carte grise du véhicule et une pièce d'identité. Si vous n'êtes pas le propriétaire, une procuration signée du propriétaire sera nécessaire. Nous nous occupons de toutes les autres formalités.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        Dans quel état doit être le véhicule ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;">
                        <p>Nous acceptons tous types de véhicules : en panne, accidentés, sans moteur, rouillés... L'état du véhicule n'importe pas. Même s'il ne roule plus ou s'il lui manque des pièces, nous pouvons l'enlever.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        Combien de temps pour obtenir le certificat ?
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer" style="display: none;">
                        <p>Le certificat de destruction VHU vous est remis le jour de l'enlèvement ou envoyé par courrier dans les 7 jours. Ce document officiel est indispensable pour les démarches auprès de la préfecture et de votre assurance.</p>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="<?php echo home_url('/faq'); ?>" class="btn btn-secondary">
                    Voir toutes les FAQ
                </a>
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
                                <a href="tel:0607380194" style="color: var(--primary-yellow-dark); font-weight: 600;">06 07 38 01 94</a>
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
// FAQ Toggle functionality
function toggleFAQ(button) {
    const faqItem = button.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const icon = button.querySelector('.faq-icon');
    
    // Close all other FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.classList.remove('active');
            item.querySelector('.faq-answer').style.display = 'none';
        }
    });
    
    // Toggle current FAQ item
    if (faqItem.classList.contains('active')) {
        faqItem.classList.remove('active');
        answer.style.display = 'none';
    } else {
        faqItem.classList.add('active');
        answer.style.display = 'block';
    }
}

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

// Back to top button functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top');
    
    function updateBackToTop() {
        if (window.pageYOffset > 300) {
            backToTopButton.style.opacity = '1';
            backToTopButton.style.visibility = 'visible';
        } else {
            backToTopButton.style.opacity = '0';
            backToTopButton.style.visibility = 'hidden';
        }
    }

    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateBackToTop);
            ticking = true;
        }
        ticking = false;
    });

    if (backToTopButton) {
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
</script>

<?php get_footer(); ?>