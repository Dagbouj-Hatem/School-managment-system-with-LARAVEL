
@role('Administrateur')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Utilisateurs</span></a>
</li>
@endrole

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-check"></i><span>Rôles</span></a>
</li>

<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{!! route('permissions.index') !!}"><i class="fa fa-check-circle"></i><span>Autorisations</span></a>
</li>

<li class="{{ Request::is('levels*') ? 'active' : '' }}">
    <a href="{!! route('levels.index') !!}"><i class="fa fa-briefcase"></i><span>Niveaux</span></a>
</li>

<li class="{{ Request::is('classes*') ? 'active' : '' }}">
    <a href="{!! route('classes.index') !!}"><i class="fa fa-list-alt"></i><span>Classes</span></a>
</li>

<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{!! route('books.index') !!}"><i class="fa fa-book"></i><span>Livres</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-tags"></i><span>Catégories des livres</span></a>
</li>   

<li class="{{ Request::is('categoryForums*') ? 'active' : '' }}">
    <a href="{!! route('categoryForums.index') !!}"><i class="fa fa-tags"></i><span>Catégories de forum</span></a>
</li>

<li class="{{ Request::is('sujetForums*') ? 'active' : '' }}">
    <a href="{!! route('sujetForums.index') !!}"><i class="fa fa-comments"></i><span>Sujets de discussion</span></a>
</li>
<li class="{{ Request::is('typeExamens*') ? 'active' : '' }}">
    <a href="{!! route('typeExamens.index') !!}"><i class="fa fa-tags"></i><span>Type d'examen</span></a>
</li>
<li class="{{ Request::is('matieres*') ? 'active' : '' }}">
    <a href="{!! route('matieres.index') !!}"><i class="fa fa-book"></i><span>Matieres</span></a>
</li><li class="{{ Request::is('examens*') ? 'active' : '' }}">
    <a href="{!! route('examens.index') !!}"><i class="fa fa-graduation-cap"></i><span>Examens</span></a>
</li>

