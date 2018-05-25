<?php $title = 'Erreur'; ?>
    <?php ob_start(); ?><body class="full-layout">
        <div class="body-wrapper">
            <?php include "view/frontend/includes/nav.php"; ?>
                <div class="container">
                    <section>
                        <div class="blog box mgbottom2 row">
                            <div class="col-md-12">
                                <?php if (isset($_SESSION['pseudo'])): ?>
                                    <p class="pull-left">
                                        <btn class="btn btn-default"> <a href="index.php?action=profilePage">Voir mon profil</a> </btn>
                                    </p>
                                    <p class="pull-right">
                                        <btn class="btn btn-default logoutbtn"> <a href="index.php?action=logout">Déconnexion</a> </btn>
                                            <?php if ($_SESSION['avatar'] != ''): ?> <img class="img-responsive img-circle avatarblogpage" src="public/images/avatar/<?= $_SESSION['avatar']; ?>" />
                                            <?php else: ?> <img class="img-responsive img-circle avatarblogpagedefault" src="public/images/avatar/avatardefaut.png" />
                                            <?php endif; ?>
                                    </p>
                                <?php else: ?>
                                    <p class="pull-right">
                                        <btn class="btn btn-default"> 
                                            <a href="index.php?action=loginPage">Connexion</a> 
                                        </btn>
                                    </p>
                                    <p class="pull-right">
                                        <btn class="btn btn-default"> 
                                            <a href="index.php?action=signupPage">Inscription</a> 
                                        </btn>&nbsp;&nbsp; 
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box">
                            <p></p>
                            <div class="divide30"></div>
                            <div class="form-container">
                            <?php if(isset($_SESSION['flash'])): ?>
                                <?php foreach($_SESSION['flash'] as $type => $message): ?>
<<<<<<< HEAD
                                <div class="text-center alert alert-<?= $type; ?>" style="font-weight: bold; text-align:center;">
=======
                                <div class="text-center alert alert-<?= $type; ?>" style="font-weight: bold; text-align: center;">
>>>>>>> bda468c4038c0c0bf938d53533c754111bbf4fb9
                                    <?= $message; ?>
                                </div>
                                <?php endforeach; ?>
                                <?php unset($_SESSION['flash']); ?>
                            <?php endif; ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
<<<<<<< HEAD
                                    <btn class="btn btn-default pull-right"><a href="index.php">Accueil</a></btn>
                                </div>
                                <div class="col-md-6">
                                    <btn class="btn btn-default pull-left"><a href="index.php?action=blog">blog</a></btn>
=======
                            <btn class="btn btn-default pull-right"><a href="index.php">Accueil</a></btn>
                                </div>
                                <div class="col-md-6">
                            <btn class="btn btn-default pull-left"><a href="index.php?action=blog">blog</a></btn>
>>>>>>> bda468c4038c0c0bf938d53533c754111bbf4fb9
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        </div>
<?php $content = ob_get_clean(); ?>
<<<<<<< HEAD
=======

>>>>>>> bda468c4038c0c0bf938d53533c754111bbf4fb9
    <?php require('template.php'); ?>