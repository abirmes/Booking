<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container .form-control {
            border-radius: 5px;
        }

        .form-container .btn {
            width: 100%;
            border-radius: 5px;
            background-color: #007bff;
            border: none;
        }

        .form-container .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>mis a jour la salle</h2>
        <form action=" {{route('updateSalle')}}" method="post">
            @csrf
            <div>
                <input name="id" value="{{ $salle->id }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">number</label>
                <input type="text" class="form-control" id="number" name="number" value='{{$salle->number}}' placeholder="Enterez le nouveau numereau" required>
            </div>
            <div class="mb-3">
                <label for="persan" class="form-label">persan</label>
                <input type="text" class="form-control" id="persan" name="persan" value="{{$salle->persan}}" placeholder="Enterez le nouveau persan" required>
            </div>
            <div class="mb-3">
                <label for="evalutaion" class="form-label">evalutaion</label>
                <input type="text" class="form-control" id="evalutaion" name="evaluation" value="{{$salle->evaluation}}" placeholder="Enterez la nouveau evalutaion" required>
            </div>
            <div class="mb-3">
                <label for="etat" class="form-label">etat</label>
                <input type="text" class="form-control" id="etat" name="etat" value="{{$salle->etat}}" placeholder="Enterez la nouveau etat" required>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>