@extends('layouts.app')

@section('content')
<body>
<div class="menu-container" id="menu-container">
    <div id="hamburger" class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <div class="sidebar" id="sidebar">
        <ul class="nav__items">
            <li class="nav-items__item"><a href="">HOME</a></li>
            <li class="nav-items__item"><a href="">アカウント一覧</a></li>
            <li class="nav-items__item"><a href="">お問い合わせ一覧</a></li>
        </ul>
    </div>
</div>
<div class=admin_backgraund>
<div class="admin">管理者</div>
</div>

<div class="TOP">
  <a class="TOP_link" id="TOP_link" href="{{ url('/') }}">TOP</a>
</div>

<div class="HOME" id="HOME" >HOME</div>

<div class="box" id="box">
<div class="space">
    <label class="Member_registration">会員登録</label>
    <ul class=members>
          <li class="member">会員一覧</li>
    </ul>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const TOP_link = document.getElementById('TOP_link');
    const HOME = document.getElementById('HOME');
    const box = document.getElementById('box');

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        sidebar.classList.toggle('active');
        TOP_link.classList.toggle('active');
        HOME.classList.toggle('active');
        box.classList.toggle('active');
    });
});
</script>
</body>
@endsection
