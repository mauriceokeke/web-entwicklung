<?= $this->extend('layout/MainLayout') ?>




<?= $this->section('content') ?>

<main class="container">
    <div class="card edgy-container">
        <div class="card-header">
            <h4>Task erstellen</h4>
        </div>
        <form method="POST" action="<?php echo base_url('Eingabetasks');?>">
            <div class="list-group list-group-flush">
                <div class="list-group-item">

                    <div class="mb-3 row">
                        <label for="tasks" class="col-sm-2 col-form-label">Task-Bezeichnung</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control edgy-container" id="tasks" placeholder="Bezeichnung für die Task" name="tasks">
                        </div>
                    </div>

                    <div class="mb-3 row align-items-center">
                        <label for="personenid" class="col-sm-2 col-form-label">Person auswählen</label>

                        <div class="dropdown col-sm-10 text-end">
                            <select class="form-control" id="personenid" name="personenid">
                                <ul class="dropdown-menu w-100 edgy-container">
                                    <? foreach($tasks as $item): ?>
                                        <option><?= $item['personenid']?></option>
                                    <? endforeach; ?>
                                </ul>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="Erinnerungsdatum" class="col-sm-2 col-form-label">Erinnerungsdatum</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control edgy-container" id="Erinnerungsdatum" name="erinnerungsdatum">
                        </div>
                    </div>

                    <div class="mb-3 row align-items-center">
                        <label for="Erinnerung" class="col-sm-2 col-form-label">Erinnerung</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control edgy-container" id="Erinnerung" placeholder="Erinnerung" name="erinnerung">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="notizen">Notizen</label>
                        <textarea  class="form-control" name="notizen"></textarea>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="spaltenid" class="col-sm-2 col-form-label">Spalte auswählen</label>

                        <div class="dropdown col-sm-10 text-end">
                            <select class="form-control" id="spaltenid" name="spaltenid">
                                <ul class="dropdown-menu w-100 edgy-container">
                                    <? foreach($tasks as $item): ?>
                                        <option><?= $item['spaltenid']?></option>
                                    <? endforeach; ?>
                                </ul>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mb-3 edgy-container" value="Task erstellen">Task erstellen</button>
                    <button role="button" class="btn btn-success mb-3 edgy-container" href="<?php echo base_url();?>">Abbrechen</button>
                </div>

            </div>
        </form>
    </div>
</main>


<?= $this->endSection() ?>
