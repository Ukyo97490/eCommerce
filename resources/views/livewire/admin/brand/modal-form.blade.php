<!-- Modal d'ajout d'une Marque-->
<div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter une marque</h5>
          <button type="button" wire:click="closeModal"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="storeBrand()">

        <div class="modal-body">

          <div class="mb-3">
            <label for="">Nom</label>
            <input type="text" wire:model.defer="name" class="form-control">
            @error('name') <small class="text-danger">{{$message}} </small> @enderror
          </div>

          <div class="mb-3">
            <label for="">Slug</label>
            <input type="text" wire:model.defer="slug" class="form-control">
            @error('slug') <small class="text-danger">{{$message}} </small> @enderror
          </div>
          
          <div class="mb-3">
            <label for="">Statut</label><br/>
            <input type="checkbox" wire:model.defer="status"/> Caché la marque
            @error('status') <small class="text-danger">{{$message}} </small> @enderror
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" wire:click="closeModal"  class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Créer</button>
        </div>
        
        </form>
      </div>
    </div>
  </div>


  <!-- Modal d'update d'une Marque -->
<div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier une marque</h5>
        <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="updateBrand">

      <div class="modal-body">

        <div class="mb-3">
          <label for="">Nom</label>
          <input type="text" wire:model.defer="name" class="form-control">
          @error('name') <small class="text-danger">{{$message}} </small> @enderror
        </div>

        <div class="mb-3">
          <label for="">Slug</label>
          <input type="text" wire:model.defer="slug" class="form-control">
          @error('slug') <small class="text-danger">{{$message}} </small> @enderror
        </div>
        
        <div class="mb-3">
          <label for="">Statut</label><br/>
          <input type="checkbox" wire:model.defer="status" style="width: 70px;height=70px"/> Caché la marque
          @error('status') <small class="text-danger">{{$message}} </small> @enderror
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal"  class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit"  class="btn btn-primary">Modifier</button>
      </div>
      
      </form>
    </div>
  </div>
</div>