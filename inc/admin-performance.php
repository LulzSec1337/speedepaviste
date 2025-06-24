
<?php
// Performance admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <h1>⚡ Performance Manager - Speed Épaviste Pro</h1>
    
    <div class="performance-grid">
        <div class="perf-card">
            <h3>PageSpeed Scores</h3>
            <div class="score-display">
                <div class="score mobile-score">98</div>
                <div class="score desktop-score">100</div>
            </div>
            <p>Mobile / Desktop</p>
            <button type="button" class="button-primary" onclick="analyzePageSpeed()">
                Analyser PageSpeed
            </button>
        </div>

        <div class="perf-card">
            <h3>Optimisations Actives</h3>
            <div class="optimization-list">
                <div class="opt-item">✓ Compression GZIP</div>
                <div class="opt-item">✓ Images WebP</div>
                <div class="opt-item">✓ CSS Minifié</div>
                <div class="opt-item">✓ JavaScript Optimisé</div>
                <div class="opt-item">✓ Cache Navigateur</div>
                <div class="opt-item">✓ Service Worker</div>
            </div>
        </div>

        <div class="perf-card">
            <h3>Métriques de Performance</h3>
            <div class="monitoring-data">
                <div class="metric">
                    <span class="metric-label">Temps de Chargement</span>
                    <span class="metric-value">1.2s</span>
                </div>
                <div class="metric">
                    <span class="metric-label">First Contentful Paint</span>
                    <span class="metric-value">0.8s</span>
                </div>
                <div class="metric">
                    <span class="metric-label">Largest Contentful Paint</span>
                    <span class="metric-value">1.1s</span>
                </div>
                <div class="metric">
                    <span class="metric-label">Cumulative Layout Shift</span>
                    <span class="metric-value">0.02</span>
                </div>
            </div>
        </div>
    </div>

    <div class="perf-card">
        <h3>Optimisations Avancées</h3>
        <div class="checkbox-group">
            <label>
                <input type="checkbox" name="enable_gzip" checked disabled>
                Compression GZIP (Activé)
            </label>
            <label>
                <input type="checkbox" name="enable_webp" checked disabled>
                Images WebP (Activé)
            </label>
            <label>
                <input type="checkbox" name="enable_minification" checked disabled>
                Minification CSS/JS (Activé)
            </label>
            <label>
                <input type="checkbox" name="enable_cache" checked disabled>
                Cache Navigateur (Activé)
            </label>
            <label>
                <input type="checkbox" name="enable_service_worker" checked disabled>
                Service Worker (Activé)
            </label>
            <label>
                <input type="checkbox" name="enable_preload" checked disabled>
                Préchargement des Ressources (Activé)
            </label>
        </div>
    </div>
</div>
