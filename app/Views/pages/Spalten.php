<?= $this->extend('layout/MainLayout') ?>

<?= $this->section('content') ?>



<main class="container">
    <div class="card edgy-container" style="width: 100%;">

        <div class="card-header card-title">
            <h4>Spalten</h4>
        </div>

        <ul class="list-group list-group-flush">

            <li class="list-group-item">
                <a role="button" class="btn btn-success mb-2 edgy-container" href="<?php echo base_url();?>NeueSpalten">Erstellen</a>

                <table class="table edgy-container">

                    <thead>

                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Board</th>
                            <th scope="col">SortID</th>
                            <th scope="col">Spalte</th>
                            <th scope="col">Spaltenbeschreibung</th>
                            <th scope="col">Bearbeiten</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Allgemeine Todos</td>
                            <td>100</td>
                            <td>zu besprechen</td>
                            <td>noch zu besprechende Todos</td>
                            <td>
                                <i class="fa-solid fa-pencil"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pencil"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>

                    </tbody>

                </table>


            </li>

        </ul>

    </div>
</main>



<?= $this->endSection() ?>
