<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }

        .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/stocks-master">Inventory System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('storeitems.index') }}">Items</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('storeinventorytable.index') }}">Inventory</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('storepurchase.index') }}">Purchases</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('storebranchsetting.index') }}">Branches</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('storekhazina.index') }}">Khazina</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('storeotherstorage.index') }}">Other
                            Storage</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('storetahwelat.index') }}">Tahwelat</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('storerasidayni.index') }}">Rasid</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
