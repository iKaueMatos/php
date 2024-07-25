<main class="content">
    <?php
        renderTitle(
            'Cadastro de Usuário',
            'Crie e atualize o usuário',
            'icofont-user'
        );

        include(TEMPLATE_PATH . "/messages.php");

        $id = $id ?? '';
        $name = $name ?? '';
        $email = $email ?? '';
        $password = $password ?? '';
        $confirm_password = $confirm_password ?? '';
        $start_date = $start_date ?? '';
        $end_date = $end_date ?? '';
        $is_admin = $is_admin ?? false;
        $errors = $errors ?? [];
    ?>

    <form action="#" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome"
                    class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
                    value="<?= htmlspecialchars($name) ?>">
                <div class="invalid-feedback">
                    <?= htmlspecialchars($errors['name'] ?? '') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Informe o e-mail"
                    class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
                    value="<?= htmlspecialchars($email) ?>">
                <div class="invalid-feedback">
                    <?= htmlspecialchars($errors['email'] ?? '') ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Informe a senha"
                    class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                    value="<?= htmlspecialchars($password) ?>">
                <div class="invalid-feedback">
                    <?= htmlspecialchars($errors['password'] ?? '') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirmação de Senha</label>
                <input type="password" id="confirm_password" name="confirm_password"
                    placeholder="Confirme a senha"
                    class="form-control <?= isset($errors['confirm_password']) ? 'is-invalid' : '' ?>"
                    value="<?= htmlspecialchars($confirm_password) ?>">
                <div class="invalid-feedback">
                    <?= htmlspecialchars($errors['confirm_password'] ?? '') ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de Admissão</label>
                <input type="date" id="start_date" name="start_date"
                    class="form-control <?= isset($errors['start_date']) ? 'is-invalid' : '' ?>"
                    value="<?= htmlspecialchars($start_date) ?>">
                <div class="invalid-feedback">
                    <?= htmlspecialchars($errors['start_date'] ?? '') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de Desligamento</label>
                <input type="date" id="end_date" name="end_date"
                    class="form-control <?= isset($errors['end_date']) ? 'is-invalid' : '' ?>"
                    value="<?= htmlspecialchars($end_date) ?>">
                <div class="invalid-feedback">
                    <?= htmlspecialchars($errors['end_date'] ?? '') ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="is_admin">Administrador?</label>
                <input type="checkbox" id="is_admin" name="is_admin"
                    class="form-check-input"
                    <?= $is_admin ? 'checked' : '' ?>>
                <div class="invalid-feedback">
                    <?= htmlspecialchars($errors['is_admin'] ?? '') ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-lg">Salvar</button>
            <a href="/users.php" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </form>
</main>
