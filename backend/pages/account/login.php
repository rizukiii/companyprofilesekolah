<?php include "../../components/head.php" ?>

<?php $title = 'Login';
$section = 'login' ?>

<body>

    <?php include "../../components/header.php" ?>

    <?php include "../../components/sidebar.php" ?>

    <?php include "../../components/breadcrumb.php" ?>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body mt-3">
                <?php include "../../components/alert.php" ?>
                    <form action="../actions/signin.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Masukan email anda"
                                value="<?= isset($_SESSION['value_email']) ? $_SESSION['value_email'] : '' ?>" />
                            <!-- untuk menghapus data value_email yang ada di session -->
                            <?php unset($_SESSION['value_email']) ?>

                            <!-- mengecek apakah ada data error_email di session-->
                            <?php if (isset($_SESSION['error_email'])): ?>
                                <!-- kalau ada ditampilkan -->
                                <small class="ms-2 text-danger"> <?= $_SESSION['error_email'] ?></small>

                                <!-- kemudian hapus data error_email di session -->
                            <?php unset($_SESSION['error_email']);
                            endif; ?>

                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id="password"
                                placeholder="Masukan Password Anda" />
                            <?php if (isset($_SESSION['error_password'])): ?>
                                <small class="ms-2 text-danger"> <?= $_SESSION['error_password'] ?></small>
                            <?php unset($_SESSION['error_password']);
                            endif;
                            ?>
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary"
                            name="button"
                            value="Login">
                            Login
                        </button>

                    </form>
                </div>
            </div>
        </div>

        <?php include "../../components/footer.php" ?>

        <?php include "../../components/script.php" ?>

</body>

<?php include "../../components/end.php" ?>