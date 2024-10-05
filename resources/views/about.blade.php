@include('components.style')
@include('components.metadata')
<body>
@include('components.navbar', ['active' => 'Sobre Nós'])
@include('components.title', ['title' => 'Sobre Nós', 'description' => 'Um pouco da nossa história e Missão'])
@include('components.getquote')
@include('components.footer')
</body>
