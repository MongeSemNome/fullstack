@include('components.style')
@include('components.metadata')
<body>
@include('components.navbar', ['active' => 'Contato'])
@include('components.title', ['title' => 'Contato', 'description' => 'Teremos prazer em falar com você!!'])
@include('components.contactbody')
@include('components.footer')
</body>
