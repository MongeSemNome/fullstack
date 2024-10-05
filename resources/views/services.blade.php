@include('components.style')
@include('components.metadata')
<body>
@include('components.navbar', ['active' => 'Serviços'])
@include('components.title', ['title' => 'Serviços Disponíveis', 'description' => 'Parte de tudo que nos diferencia no mercado'])
@include('components.getquote')
@include('components.footer')
</body>
