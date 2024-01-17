
<?= $this->extend('layout/MainLayout') ?>




<?= $this->section('content') ?>

    <main class="container">
        <div class="card edgy-container">
            <div class="card-header">
                <h4>Task erstellen</h4>
            </div>
            <form method="POST" action="<?= base_url('update');?>">
                <input type="hidden" name="_method" value="PUT" />
                <div class="list-group list-group-flush">
                    <div class="list-group-item">

                        <div class="mb-3 row">
                            <label for="tasks" class="col-sm-2 col-form-label">Task-Bezeichnung</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control edgy-container" id="tasks" value="<?= $tasks['tasks']?>" name="tasks">
                            </div>
                        </div>

                        <div class="mb-3 row align-items-center">
                            <label for="personenid" class="col-sm-2 col-form-label">Person auswählen</label>

                            <div class="dropdown col-sm-10 text-end">
                                <select class="form-control" id="personenid" name="personenid" >
                                    <ul class="dropdown-menu w-100 edgy-container">
                                        <option value="1" <?php if ($tasks['personenid'] == 1) echo 'selected'; ?>>Hans Peter</option>
                                        <option value="2" <?php if ($tasks['personenid'] == 2) echo 'selected'; ?>>Klaus Kleber</option>
                                        <option value="3" <?php if ($tasks['personenid'] == 3) echo 'selected'; ?>>Friedrich Merz</option>
                                    </ul>
                                </select>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="Erinnerungsdatum" class="col-sm-2 col-form-label">Erinnerungsdatum</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control edgy-container" id="Erinnerungsdatum" name="erinnerungsdatum" value="<?= $tasks['erinnerungsdatum'] ?>" >
                            </div>
                        </div>

                        <div class="mb-3 row align-items-center">
                            <label for="Erinnerung" class="col-sm-2 col-form-label">Erinnerung</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control edgy-container" id="Erinnerung"  name="erinnerung" value="<?= $tasks['erinnerung'] ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="notizen">Notizen</label>
                            <textarea  class="form-control" name="notizen" value="<?= $tasks['notizen'] ?>"></textarea>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="spaltenid" class="col-sm-2 col-form-label">Spalte auswählen</label>

                            <div class="dropdown col-sm-10 text-end">
                                <select class="form-control" id="spaltenid" name="spaltenid"  required>
                                    <option value="1" <?php if ($tasks['spaltenid'] == 1) echo 'selected'; ?>>Option 1</option>
                                    <option value="2" <?php if ($tasks['spaltenid'] == 2) echo 'selected'; ?>>Option 2</option>
                                </select>
                            </div>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mb-3 edgy-container" value="Speichern">Speichern</button>
                        <button role="button" class="btn btn-success mb-3 edgy-container" href="<?php echo base_url();?>">Abbrechen</button>
                    </div>

                </div>
            </form>
        </div>
    </main>


<?= $this->endSection() ?>