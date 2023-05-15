<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-light">
    <h1 class="text-center my-2">Form</h1>
    <div class="container mt-5 d-flex">
        <div class="w-50">
            <div class="p-4 border rounded">
                <form id="form_id" class="mx-10">
                    <div class="mb-3">
                        <label for="number" class="form-label">No.</label>
                        <input type="number" class="form-control" id="number" aria-describedby="noHelp"
                            name="number" required>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Kata</label>
                        <input type="text" class="form-control" id="text" name="text" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger" id="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <table id="table-data" class="table table-dark border rounded">
                <thead>
                    <tr class="border rounded">
                        <th>Index</th>
                        <th>Text</th>
                    </tr>
                </thead>
                <tbody class="table-light"></tbody>
            </table>
        </div>
    </div>
    </body>
</html>