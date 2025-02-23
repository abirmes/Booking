<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 20px;
            height: 100vh;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin: 5px 0;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .header {
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .custom-modal {
            max-width: 500px;
            margin: 1.75rem auto;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3>BOOKING</h3>
        <a href="#">Home</a>
    </div>

    <div class="main-content">
        <div class="header">
            <h4>Feel Free To Book</h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ajouter une salle
            </button>
        </div>
        <div class="content">
            <div class="row">
                <?php foreach ($salles as $salle) { ?>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($salle->evaluation); ?></h5>
                                <p class="card-text"> salle persan: <?php echo ($salle->persan); ?></br>
                                    salle number: <?php echo ($salle->number); ?></p>
                                <a href="/supdate/{{$salle->id}}" class="btn btn-primary">update</a>
                                <form method="POST" action="{{ route('deleteSalle', $salle->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-sm btn-danger" value="Supprimer">
                            </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ajouter une salle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('salle.create')}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="number" class="form-label">number</label>
                            <input type="number" class="form-control" id="number" name="number" value="number" placeholder="Enterez le nombre du salle">
                        </div>
                        <div class="mb-3">
                            <label for="persan" class="form-label">persan</label>
                            <input type="text" class="form-control" id="persan" name="persan" value="persan" placeholder="Enterez le persan du salle">
                        </div>
                        <div class="mb-3">
                            <label for="evalutaion" class="form-label">evalutaion</label>
                            <input type="text" class="form-control" id="evalutaion" name="evaluation" value="evalutaion" placeholder="Enterez l'evaluation du salle">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>