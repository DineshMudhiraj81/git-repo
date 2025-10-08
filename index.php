<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Upload</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .upload-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #2d3436;
            margin-bottom: 25px;
            font-size: 24px;
        }

        input[type="file"] {
            display: block;
            margin: 15px auto;
            padding: 8px;
            border: 1px solid #dfe6e9;
            border-radius: 6px;
            background: #f5f6fa;
            cursor: pointer;
            width: 100%;
        }

        input[type="file"]::-webkit-file-upload-button {
            background: #0984e3;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }

        input[type="file"]::-webkit-file-upload-button:hover {
            background: #74b9ff;
        }

        button {
            background-color: #6c5ce7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #a29bfe;
        }

        .note {
            margin-top: 15px;
            font-size: 13px;
            color: #636e72;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h1>Upload a Document</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="document" accept=".pdf,.doc,.docx,.txt" required>
            <button type="submit">Upload</button>
        </form>
        <p class="note">Allowed formats: PDF, DOC, DOCX, TXT</p>
    </div>
</body>
</html>
