<!DOCTYPE html>
<html lang="zxx">
@include('Fontent.Layout.Head')

<body id="top">

<!--header-->
	@include('Fontent.Layout.Header')


<!--main content-->
@yield('content')

<!-- footer Start -->
@include('Fontent.Layout.Footer')
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    @include('Fontent.Layout.Script')
</body>