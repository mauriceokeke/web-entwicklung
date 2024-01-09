<?= $this->extend('layout/MainLayout') ?>

<?= $this->section('content') ?>


<main class="container">
  <div class="card edgy-container">
    <div class="card-header">
      <h4>Spalte erstellen</h4>
    </div>
    <div class="list-group list-group-flush">
      <div class="list-group-item">

         <div class="mb-3 row">
            <label for="Spaltenbezeichnung" class="col-sm-2 col-form-label">Spalten-Bezeichnung</label>
            <div class="col-sm-10">
              <input type="text" class="form-control edgy-container" id="Spaltenbezeichnung" placeholder="Bezeichnung für die Spalte">
            </div>
         </div>

        <div class="mb-3 row">
             <label for="Spaltenbeschreibung" class="col-sm-2 col-form-label">Spaltenbeschreibung</label>
             <div class="col-sm-10">
               <textarea class="form-control edgy-container" id="Spaltenbeschreibung" rows=5></textarea>
             </div>
        </div>

        <div class="mb-3 row">
               <label for="SortID" class="col-sm-2 col-form-label">SortID</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control edgy-container" id="SortID" placeholder="SortID angeben">
               </div>
             </div>

        <div class="mb-3 row align-items-center">
          <label for="sortid" class="col-sm-2 col-form-label">Board auswählen</label>

          <div class="dropdown col-sm-10 text-end">
            <button class="btn btn-light w-100 text-start edgy-container" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Allgemeine Todos
            </button>
            <ul class="dropdown-menu w-100 edgy-container">
              <li><button class="dropdown-item" type="button">Todo 1</button></li>
              <li><button class="dropdown-item" type="button">Todo 2</button></li>
              <li><button class="dropdown-item" type="button">Todo 3</button></li>
            </ul>
          </div>
        </div>

        <button type="button" class="btn btn-success mb-3 edgy-container">Speichern</button>
        <button type="button" class="btn btn-secondary mb-3 edgy-container">Abbrechen</button>
      </div>

    </div>
  </div>
</main>




<?= $this->endSection() ?>
