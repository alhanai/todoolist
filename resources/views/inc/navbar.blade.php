<nav class="navbar navbar-inverse">
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="naver-toggle collapsed" data-toggle="collapse">
       <span class="sr-only">toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
  </button>
<br>
        <a  class="alert alert-info" role="alert" href="{{route('todo.create')}}">create </a>
        <a  class="alert alert-info" role="alert" href="{{route('todo.index')}}">index </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home<span class="sr-only"></span></a></li>
          <li class="{{Request::is('todo/create') ? 'active' : ''}}"><a href="todo/create">Create/todo</a></li>
          <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>