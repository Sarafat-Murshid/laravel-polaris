<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@12.1.1/build/esm/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link
    rel="preconnect"
    href="https://fonts.gstatic.com/"
    crossorigin="anonymous"
    />
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@450;550;650;700&display=swap"
    />
</head>
<body>
    <div class="Polaris-Page">
        <div class="Polaris-Page__Header">
            <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeExtraLarge">Contact Us</h1>
        </div>
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                    <div class="Polaris-FormLayout">
                        <!-- Name Field -->
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-TextField">
                                <input type="text" name="name" id="name" class="Polaris-TextField__Input" placeholder="Your Name" required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-TextField">
                                <input type="email" name="email" id="email" class="Polaris-TextField__Input" placeholder="Your Email" required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-TextField Polaris-TextField--multiline">
                                <textarea name="message" id="message" class="Polaris-TextField__Input" placeholder="Your Message" required></textarea>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="Polaris-FormLayout__Item">
                            <button type="submit" class="Polaris-Button Polaris-Button--primary">
                                <span class="Polaris-Button__Content">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

@if(session('success'))
    <div class="Polaris-Banner Polaris-Banner--statusSuccess">
        <div class="Polaris-Banner__Content">
            <p>{{ session('success') }}</p>
        </div>
    </div>
@endif
