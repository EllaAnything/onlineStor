<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <h4 style="text-align: center">Добрый день, администратор!</h4>
            <br/>
            <p style="text-align: center">Вам доступны такие возможности:</p>
            <br/>
            <ul style="text-align: center">
                <a href="/admin/product" class="link-edit">Управление товарами</a>
                <a href="/admin/category" class="link-edit">Управление категориями</a>
                <a href="/admin/order" class="link-edit">Управление заказами</a>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

