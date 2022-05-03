<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
      <div>
        <label for="formFileLg" class="form-label">Csv Input File</label>
        <input class="form-control form-control-lg" id="formFileLg" name="file" type="file">
      </div>
    </div>

    <div class="container mt-5">
      <div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Time</th>
              <th scope="col">File Name</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">12-03-03 9:30 am (12 minutes ago)</th>
              <td>File Name</td>
              <td>Pending / Processing / Failed / Completed</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>