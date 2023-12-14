<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDINAY</title>
  <x-stylepedido/>

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <x-siderbar/>

  <div class="content-wrapper">
    <section class="content" name="content">
        @livewire('Pedidos', ['user_id' => $user_id])
    </section>
  </div>
</div>

<x-scriptpedido/>
</body>
</html>
