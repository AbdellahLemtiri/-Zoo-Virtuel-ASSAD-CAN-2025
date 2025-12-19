
<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Éditer : <?= htmlspecialchars($tour['title']) ?> - ASSAD</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
 <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: "#0d9488",          // Teal واعر مودرن
                    "primary-dark": "#0f766e",
                    "primary-light": "#2dd4bf",
                    "background-light": "#f0fdfa",
                    "background-dark": "#042f2e",
                    "surface-light": "#ffffff",
                    "surface-dark": "#134e4a",
                    "text-light": "#164e63",
                    "text-dark": "#a7f3d0",
                    "text-secondary-light": "#0891b2",
                    "text-secondary-dark": "#5eead4",
                    "accent": "#f59e0b"          // لمسة ذهبية
                },
                fontFamily: {
                    sans: ["Plus Jakarta Sans", "sans-serif"]
                },
                animation: {
                    'fade-in': 'fadeIn 0.7s ease-out forwards',
                    'slide-up': 'slideUp 0.8s ease-out forwards',
                    'pulse-glow': 'pulseGlow 2s infinite'
                },
                keyframes: {
                    fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                    slideUp: { '0%': { transform: 'translateY(60px)', opacity: '0' }, '100%': { transform: 'translateY(0)', opacity: '1' } },
                    pulseGlow: { '0%, 100%': { boxShadow: '0 0 20px rgba(13,148,136,0.3)' }, '50%': { boxShadow: '0 0 40px rgba(13,148,136,0.6)' } }
                }
            }
        }
    }
</script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen text-text-main-light dark:text-text-main-dark transition-colors duration-200">
    <div class="flex h-screen w-full overflow-hidden">
        <aside class="hidden lg:flex flex-col w-72 border-r border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark p-6 h-full justify-between">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3 px-2">
                    <div class="bg-primary/20 p-2 rounded-lg">
                        <span class="material-symbols-outlined text-primary text-3xl">pets</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold tracking-tight">ASSAD</h1>
                        <p class="text-text-sec-light dark:text-text-sec-dark text-xs uppercase tracking-wider font-semibold">Guide Space</p>
                    </div>
                </div>
                <nav class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="tableau_de_bord.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">dashboard</span>
                        <span>Tableau de bord</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary dark:text-primary font-bold" href="mes_visites.php">
                        <span class="material-symbols-outlined">map</span>
                        <span>Mes Visites</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="reservations.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">groups</span>
                        <span>Réservations</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="parametres.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">settings</span>
                        <span>Paramètres</span>
                    </a>
                </nav>
            </div>
            <div class="flex items-center gap-3 px-4 py-3 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
                <div class="bg-center bg-cover rounded-full h-10 w-10 border-2 border-primary" data-alt="Portrait du guide" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6SweDCChTHrnzUi3ijD-HqKt7FximPeaVPRuHptoZB3gCiNIREev191XH6lCU2g9dWO-0nb19loXauXqO29KxIYeVB8L_qXV7j_z9ew9PCkxmtTGzyhArcCoyjioHHD9oWPKFoA4SKfrqRSRlWptyCfastPtNkgSlFizXCwA60Izfk-CrC13bruBTAOjH610XOUvFB1RnfkoM-IeFW7fkvzAujenUwRWp02gjgWiOhb4zpbuGErPegntLM0188b1Dkbt6DnzndgR5");'></div>
                <div class="flex flex-col overflow-hidden">
                    <p class="text-sm font-bold truncate"><?= $nom_utilisateur ?></p>
                    <p class="text-text-sec-light dark:text-text-sec-dark text-xs truncate">Guide <?= htmlspecialchars($role_utilisateur) ?></p>
                </div>
            </div>
        </aside>
        <main class="flex-1 flex flex-col h-full overflow-y-auto overflow-x-hidden">
            <div class="lg:hidden flex items-center justify-between p-4 border-b border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark sticky top-0 z-20">
                <span class="material-symbols-outlined text-primary">pets</span>
                <span class="material-symbols-outlined text-text-main-light dark:text-text-main-dark">menu</span>
            </div>
            
            <div class="p-6 md:p-10 max-w-5xl mx-auto w-full flex flex-col gap-8">
                
                <a href="visite_details.php?id=<?= $tour_id ?>" class="text-sm text-text-sec-light dark:text-text-sec-dark hover:text-primary transition-colors flex items-center gap-1">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Retour aux détails de la Visite #<?= $tour_id ?>
                </a>

                <div class="flex flex-col gap-1 pb-4 border-b border-border-light dark:border-border-dark">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Éditer la Visite</h2>
                    <p class="text-text-sec-light dark:text-text-sec-dark text-lg">Modifiez les informations pour : **<?= htmlspecialchars($tour['title']) ?>**</p>
                </div>
                
                <?php if ($success_message): ?>
                    <div class="p-4 bg-green-100 dark:bg-green-900/40 border border-green-300 dark:border-green-700/50 text-green-700 dark:text-green-300 rounded-lg flex items-start gap-3" role="alert">
                        <span class="material-symbols-outlined text-green-700 dark:text-green-300">check_circle</span>
                        <p class="text-sm font-medium"><?= $success_message ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($error_message): ?>
                    <div class="p-4 bg-red-100 dark:bg-red-900/40 border border-red-300 dark:border-red-700/50 text-red-700 dark:text-red-300 rounded-lg flex items-start gap-3" role="alert">
                        <span class="material-symbols-outlined text-red-700 dark:text-red-300">error</span>
                        <p class="text-sm font-medium"><?= $error_message ?></p>
                    </div>
                <?php endif; ?>

                <form method="POST" action="visite_edit.php?id=<?= $tour_id ?>" class="flex flex-col gap-8 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-xl p-6 md:p-8">
                    
                    <div class="flex flex-col gap-5">
                        <h3 class="text-2xl font-bold text-primary border-b border-border-light dark:border-border-dark pb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined">description</span>
                            Détails de la Visite
                        </h3>
                        
                        <div>
                            <label for="title" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Titre de la Visite <span class="text-red-500">*</span></label>
                            <input type="text" id="title" name="title" value="<?= htmlspecialchars($tour['title']) ?>" required
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark text-lg font-semibold" />
                        </div>
                        
                        <div>
                            <label for="description" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Description Détaillée</label>
                            <textarea id="description" name="description" rows="5"
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark resize-none"><?= htmlspecialchars($tour['description']) ?></textarea>
                            <p class="text-xs text-text-sec-light dark:text-text-sec-dark mt-1">Cette description apparaîtra sur la page publique de la réservation.</p>
                        </div>
                        
                        <div>
                            <label for="category" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Catégorie</label>
                            <select id="category" name="category"
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark">
                                <?php foreach ($categories as $cat) : ?>
                                    <option value="<?= htmlspecialchars($cat) ?>" <?= $tour['category'] === $cat ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($cat) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                    </div>

                    <div class="flex flex-col gap-5">
                        <h3 class="text-2xl font-bold text-primary border-b border-border-light dark:border-border-dark pb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined">schedule</span>
                            Planning et Logistique
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="date" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Date <span class="text-red-500">*</span></label>
                                <input type="date" id="date" name="date" value="<?= htmlspecialchars($tour['date']) ?>" required
                                    class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                            </div>
                            
                            <div>
                                <label for="time" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Heure <span class="text-red-500">*</span></label>
                                <input type="time" id="time" name="time" value="<?= htmlspecialchars($tour['time']) ?>" required
                                    class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                            </div>
                            
                            <div>
                                <label for="duration" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Durée (en minutes)</label>
                                <input type="number" id="duration" name="duration" value="<?= htmlspecialchars($tour['duration']) ?>" min="15" max="180"
                                    class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                            </div>
                        </div>

                        <div>
                            <label for="link" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Lien de la salle de Visite (Zoom, Teams, etc.)</label>
                            <input type="url" id="link" name="link" value="<?= htmlspecialchars($tour['link']) ?>" required
                                class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" placeholder="https://..." />
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <h3 class="text-2xl font-bold text-primary border-b border-border-light dark:border-border-dark pb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined">settings_input_svideo</span>
                            Limites et Média
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                             <div>
                                <label for="max_participants" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Nombre maximum de participants</label>
                                <input type="number" id="max_participants" name="max_participants" value="<?= htmlspecialchars($tour['max_participants']) ?>" min="1" required
                                    class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-background-light dark:bg-surface-dark/50 focus:border-primary focus:ring-primary text-text-main-light dark:text-text-main-dark" />
                                <p class="text-xs text-text-sec-light dark:text-text-sec-dark mt-1">Laissez vide ou mettez un grand nombre pour illimité.</p>
                            </div>

                            <div>
                                <label for="status" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Statut</label>
                                <select id="status" name="status" disabled
                                    class="w-full px-4 py-2 border border-border-light dark:border-border-dark rounded-lg bg-gray-50 dark:bg-gray-800/50 text-text-sec-light dark:text-text-sec-dark cursor-not-allowed">
                                    <option value="scheduled" <?= $tour['status'] === 'scheduled' ? 'selected' : '' ?>>Programmé</option>
                                    <option value="draft" <?= $tour['status'] === 'draft' ? 'selected' : '' ?>>Brouillon</option>
                                    <option value="live" <?= $tour['status'] === 'live' ? 'selected' : '' ?>>En direct</option>
                                </select>
                                <p class="text-xs text-text-sec-light dark:text-text-sec-dark mt-1">Le statut se met à jour automatiquement.</p>
                            </div>
                        </div>

                        <div>
                            <label for="image_upload" class="block text-sm font-medium text-text-sec-light dark:text-text-sec-dark mb-1">Image de Couverture</label>
                            <div class="flex items-center gap-4 p-4 border border-dashed border-border-light dark:border-border-dark rounded-lg">
                                <div class="h-20 w-32 rounded-lg bg-cover bg-center shrink-0 border border-border-light dark:border-border-dark" style='background-image: url("<?= $tour['image'] ?>");'></div>
                                <input type="file" id="image_upload" name="image_upload" accept="image/*"
                                    class="block w-full text-sm text-text-sec-light dark:text-text-sec-dark
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-primary/10 file:text-primary
                                    hover:file:bg-primary/20" />
                            </div>
                            <p class="text-xs text-text-sec-light dark:text-text-sec-dark mt-1">Format recommandé : 16:9. L'image actuelle sera remplacée.</p>
                        </div>
                    </div>
                    
                    <div class="flex justify-end gap-4 pt-6 border-t border-border-light dark:border-border-dark">
                         <a href="visite_details.php?id=<?= $tour_id ?>" class="flex items-center gap-2 px-6 py-2.5 rounded-lg border border-border-light dark:border-border-dark text-text-main-light dark:text-text-main-dark font-bold hover:bg-border-light dark:hover:bg-surface-dark transition-colors">
                            <span class="material-symbols-outlined text-[20px]">cancel</span>
                            <span>Annuler</span>
                        </a>
                        <button type="submit" name="update_tour" class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg font-bold shadow-lg shadow-primary/30 transition-all transform hover:scale-[1.02]">
                            <span class="material-symbols-outlined text-[20px]">save</span>
                            <span>Sauvegarder les modifications</span>
                        </button>
                    </div>
                </form>
                
            </div>
        </main>
    </div>
</body>

</html>