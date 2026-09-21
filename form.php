<!--
Darren Bruegman
---------------
Purpose: stores the form, separate from the index so it can be used in separate parts of the website
-->

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Date Selector</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow-sm border-2 border-secondary" style="max-width: 500px; width: 100%;">
            <div class="card-body p-4">

                <h2 class="card-title text-center mb-4">
                    Select Dates
                </h2>

                <form action="index.php" method="get">

                    <div class="mb-3">
                        <label for="RDate" class="form-label">
                            Return Date
                        </label>
                        <input
                            type="date"
                            name="RDate"
                            id="RDate"
                            class="form-control form-control-lg"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="DDate" class="form-label">
                            Due Date
                        </label>
                        <input
                            type="date"
                            name="DDate"
                            id="DDate"
                            class="form-control form-control-lg"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        Submit
                    </button>

                </form>

            </div>
        </div>
    </div>

</body>

</html>