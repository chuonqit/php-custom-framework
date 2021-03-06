<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= empty(register('title')) ? (getOptions()['app_name'] ?? APP_NAME) : register('title') ?></title>
    <link rel="stylesheet" href="<?= asset('css/styles.css') ?>">
    <?= register('styles'); ?>
</head>
<body>

<h1>Header</h1>
<ul>
    @foreach(getMenuClient() as $item)
        <li><a href="{{ $item['menu_url'] ?? route('danh-muc/'.$item['category_slug']) }}">{{ $item['category_name'] }}</a></li>
    @endforeach
    <li>
        @auth 
            Hello, {{ auth['first_name'] }} <a href="<?= route('account.logout') ?>">Logout</a>
            @if(strtolower(auth['role']) == 'admin' || strtolower(auth['role']) == 'manager')
            <a href="<?= route('admin') ?>">Admin</a>
            @endif
        @else
            <a href="<?= route('account.login') ?>">Login</a>
        @endauth
    </li>
</ul>
<hr>

<?= register('content'); ?>

<hr>
<h1>Footer</h1>

<?= register('scripts'); ?>
</body>
</html>