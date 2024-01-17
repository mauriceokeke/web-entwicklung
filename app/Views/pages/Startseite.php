<?= $this->extend('layout/MainLayout') ?>

<?= $this->section('content') ?>


<!-- Tasks -->
<main class="container">
    <div class="card edgy-container">
        <div class="card-body edgy-container">
            <h4>Tasks</h4>
        </div>
        <ul class="list-group list-group-flush">

            <li class="list-group-item">
                <a role="button" class="btn btn-success mb-2 edgy-container" href="<?php echo base_url();?>NeueTasks">Neu</a>


        <table class="table edgy-container">

            <thead>

            <tr>
                <th scope="col">Taskname</th>
                <th scope="col">Spalten-ID</th>
                <th scope="col">Notizen</th>
                <th scope="col">Zuständig</th>
            </tr>

            </thead>

            <tbody>

            <? foreach($tasks as $item): ?>
                <tr>
                    <td><?= $item['tasks']?></td>
                    <td><?= $item['spaltenid'] ?></td>
                    <td><?= $item['notizen'] ?></td>
                    <td><?= $item['name']?></td>
                    <td>
                        <a href="<?php echo base_url('edit');?>" style="text-decoration: none; color: inherit;" >
                            <i class="fa-solid fa-pencil"></i>
                        </a>


                    </td>
                </tr>
            <? endforeach; ?>



            </tbody>

        </table>


        </li>

        </ul>

    </div>
</main>


<?= $this->endSection() ?>
