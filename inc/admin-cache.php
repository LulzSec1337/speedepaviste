
<?php
// Cache Management admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <div class="dashboard-header">
        <h1>⚡ Gestion du Cache</h1>
        <p>Optimisez les performances avec une gestion avancée du cache</p>
    </div>

    <div class="cache-overview">
        <div class="cache-stats">
            <div class="stat-box">
                <h4>Cache Actif</h4>
                <div class="stat-value cache-status">✓</div>
                <div class="stat-label">Fonctionnel</div>
            </div>
            <div class="stat-box">
                <h4>Taille Cache</h4>
                <div class="stat-value">124 MB</div>
                <div class="stat-label">Économie: 89%</div>
            </div>
            <div class="stat-box">
                <h4>Vitesse Gain</h4>
                <div class="stat-value">3.2x</div>
                <div class="stat-label">Plus rapide</div>
            </div>
            <div class="stat-box">
                <h4>Cache Hit Rate</h4>
                <div class="stat-value">94%</div>
                <div class="stat-label">Très bon</div>
            </div>
        </div>
    </div>

    <div class="cache-actions">
        <button class="button-primary" onclick="clearAllCache()">
            🗑️ Vider Tout le Cache
        </button>
        <button class="button-primary" onclick="clearPageCache()">
            📄 Vider Cache Pages
        </button>
        <button class="button-primary" onclick="clearObjectCache()">
            🎯 Vider Cache Objets
        </button>
        <button class="button-primary" onclick="clearDatabaseCache()">
            🗄️ Vider Cache BDD
        </button>
    </div>

    <div class="cache-settings">
        <div class="cache-card">
            <h3>⚙️ Configuration Cache</h3>
            <div class="cache-setting">
                <label class="cache-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Cache des Pages</span>
                </label>
                <p class="setting-description">Met en cache le contenu des pages pour un chargement plus rapide</p>
            </div>
            <div class="cache-setting">
                <label class="cache-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Cache Base de Données</span>
                </label>
                <p class="setting-description">Cache les requêtes de base de données fréquentes</p>
            </div>
            <div class="cache-setting">
                <label class="cache-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Cache Objets</span>
                </label>
                <p class="setting-description">Cache les objets WordPress pour réduire la charge serveur</p>
            </div>
            <div class="cache-setting">
                <label class="cache-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Compression GZIP</span>
                </label>
                <p class="setting-description">Compresse les fichiers pour réduire la bande passante</p>
            </div>
        </div>

        <div class="cache-card">
            <h3>🕒 Durée de Vie du Cache</h3>
            <div class="form-group">
                <label>Cache des Pages (heures)</label>
                <input type="number" class="theme-input" value="24" min="1" max="168">
            </div>
            <div class="form-group">
                <label>Cache Base de Données (minutes)</label>
                <input type="number" class="theme-input" value="60" min="5" max="1440">
            </div>
            <div class="form-group">
                <label>Cache Objets (minutes)</label>
                <input type="number" class="theme-input" value="30" min="5" max="1440">
            </div>
        </div>

        <div class="cache-card">
            <h3>🚫 Exclusions Cache</h3>
            <div class="form-group">
                <label>Pages à exclure (une par ligne)</label>
                <textarea class="theme-input" rows="4" placeholder="/admin/&#10;/wp-admin/&#10;/checkout/"><?php echo get_option('cache_exclusions', "/admin/\n/wp-admin/\n/checkout/"); ?></textarea>
            </div>
            <div class="form-group">
                <label>Paramètres URL à ignorer</label>
                <input type="text" class="theme-input" value="utm_source,utm_medium,utm_campaign" placeholder="param1,param2,param3">
            </div>
        </div>

        <div class="cache-card">
            <h3>📊 Statistiques Détaillées</h3>
            <div class="cache-analytics">
                <div class="cache-metric">
                    <span class="metric-label">Requêtes Servies du Cache</span>
                    <span class="metric-value">15,234</span>
                </div>
                <div class="cache-metric">
                    <span class="metric-label">Économie Bande Passante</span>
                    <span class="metric-value">2.4 GB</span>
                </div>
                <div class="cache-metric">
                    <span class="metric-label">Temps de Réponse Moyen</span>
                    <span class="metric-value">187ms</span>
                </div>
                <div class="cache-metric">
                    <span class="metric-label">Dernière Purge</span>
                    <span class="metric-value">Il y a 2h</span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-submit-section">
        <button type="button" class="button-primary" onclick="saveCacheSettings()">
            Sauvegarder Configuration
        </button>
        <button type="button" class="button-secondary" onclick="resetCacheSettings()">
            Réinitialiser
        </button>
    </div>
</div>
