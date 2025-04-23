<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pet Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @font-face {
            font-family: "Baskerville Display PT";
            src: url("fonts/BaskervilleDisplayPT.woff2") format("woff2"),
                 url("fonts/BaskervilleDisplayPT.woff") format("woff"),
                 url("fonts/BaskervilleDisplayPT.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        body { 
            background-color: #f6f1eb; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        h2 {
            font-size: 28px;
            font-family: "Baskerville Display PT", serif;
            margin-bottom: 40px; /* Increased space below the heading */
            text-align: center;
        }

        .container.form-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 30px auto;
            padding: 50px;
            border-radius: 8px;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 24px;
            cursor: pointer;
            text-decoration: none;
            color: black;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-top: 15px;
            color: #333;
        }

        input, select, textarea {
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        textarea {
            height: 100px;
        }

        .submit-btn {
            background-color: #d5ba8f;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #b59a76;
        }

        .close-btn {
            font-size: 24px;
            cursor: pointer;
            text-decoration: none;
            color: black;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .close-btn:hover {
            color: #a67c52;
        }
    </style>
</head>
<body>

    <div class="container form-container">
        <!-- Back button -->
        <a href="{{ url()->previous() }}" class="close-btn ">✖</a>

        <h2>Create Pet Profile</h2>

        <!-- Success message (if any) -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Pet Type -->
            <label for="type">Type</label>
            <input type="text" id="type" name="type" required>

            <!-- Pet Name -->
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <!-- Gender -->
            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <!-- Breed -->
            <label for="breed">Breed</label>
            <input type="text" id="breed" name="breed" required>

            <!-- Pedigree Tested -->
            <label for="pedigree_tested">Pedigree Tested</label>
            <select name="pedigree_tested" id="pedigree_tested" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <!-- DNA Tested -->
            <label for="dna_tested">DNA Tested</label>
            <select name="dna_tested" id="dna_tested" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <!-- Vaccinated -->
            <label for="vaccinated">Vaccinated</label>
            <select name="vaccinated" id="vaccinated" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <!-- Size -->
            <label for="size">Size</label>
            <input type="text" id="size" name="size" required>

            <!-- Age -->
            <label for="age">Age (in years)</label>
            <input type="number" id="age" name="age" required>

            <!-- Weight -->
            <label for="weight">Weight (kg)</label>
            <input type="number" step="0.01" id="weight" name="weight" required>

            <!-- Photo Upload -->
            <label for="photos">Upload Photo</label>
            <input type="file" name="photos" id="photos">

            <!-- City -->
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Create Pet Profile</button>
        </form>
    </div>

</body>
</html>
