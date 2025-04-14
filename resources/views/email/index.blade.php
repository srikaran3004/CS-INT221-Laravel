<!DOCTYPE html>
<html>
<head>
    <title>Email Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .email-form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Email Page</h1>
        <div class="email-form">
            <form action="{{ route('email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">To:</label>
                    <input type="email" id="email" name="email" value="srikaran2230@gmail.com" readonly>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" value="Welcome to our website" readonly>
                </div>
                <div class="form-group">
                    <label for="body">Message:</label>
                    <textarea id="body" name="body" rows="4" readonly>Class Activity of Laravel</textarea>
                </div>
                <button type="submit">Send Email</button>
            </form>
        </div>
    </div>
</body>
</html> 