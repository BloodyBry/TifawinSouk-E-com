<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TifawinSouk</title>
    <style>
        body{font-family:Arial, sans-serif; margin:40px;}
        .container{max-width:900px; margin:auto;}
        .top{display:flex; justify-content:space-between; align-items:center;}
        table{width:100%; border-collapse:collapse; margin-top:15px;}
        th,td{border:1px solid #ddd; padding:10px;}
        .btn{padding:8px 12px; border:1px solid #333; text-decoration:none; background:#fff; cursor:pointer;}
        .danger{border-color:#b00020;}
        .box{padding:10px; border:1px solid #2e7d32; margin:10px 0;}
        input, textarea{width:100%; padding:10px; border:1px solid #ccc;}
        .field{margin-bottom:12px;}
        form{display:inline;}
    </style>
</head>
<body>
<div class="container">
    @if(session('success'))
        <div class="box">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="box" style="border-color:#b00020;">
            <ul style="margin:0; padding-left:18px;">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>
</body>
</html>
