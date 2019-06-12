    <a class='btn btn-primary'  data-toggle="modal" data-target="#add_permission"  data-id="{{ $id }}">
        <i class="fa fa-check-square"></i> Ajoute une permission
    </a>
    <a class='btn btn-primary'  data-toggle="modal" data-target="#delete_permission" data-id="{{ $id }}">
        <i class="fa fa-user-times"></i> Supprimer permission
    </a>
<!-- Modal  ADD permission -->
<div class="modal fade" id="add_permission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Séléctionner une permission à ajouter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            Permission à supprimer  <span id="modal-myvalue"></span>
            <select class=" form-control"> 
                  
                @foreach(Auth::user()->getAllPermissions() as $permission)
                    <option>{{ $permission->name }} </option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
  
<!-- Modal  Delete permission -->
<div class="modal fade" id="delete_permission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Séléctionner une permission à supprimer </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            Permission à supprimer 
            <select class=" form-control">   
                @foreach(Auth::user()->getAllPermissions() as $permission)
                    <option>{{ $permission->name }} </option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
  