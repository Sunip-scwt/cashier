<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="gradient-bg flex items-center justify-center min-h-screen p-4">
        <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-gray-100" id="auth-container">

            <div id="signin-form-container">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Sign In to Your Account</h2>
                    <p class="text-gray-600 text-sm">Access your account to continue</p>
                </div>

                <form id="login-form" class="space-y-5">
                    <div>
                        <label for="login-email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" id="login-email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors" placeholder="your@email.com" required>
                    </div>

                    <div>
                        <label for="login-password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                        <input type="password" id="login-password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors" placeholder="••••••••" required>
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="#" data-container="forgot-password-form-container" id="forgot-password-link" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 px-4 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Sign In
                    </button>
                </form>

                <div class="relative flex items-center my-6">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="flex-shrink mx-4 text-gray-500 text-sm">or continue with</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <div class="space-y-3">
                    <button class="w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <img src="https://img.icons8.com/color/20/000000/google-logo.png" alt="Google" class="mr-3">
                        <span class="text-gray-700 font-medium">Google</span>
                    </button>
                    <button class="w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <img src="https://img.icons8.com/color/20/000000/facebook-new.png" alt="Facebook" class="mr-3">
                        <span class="text-gray-700 font-medium">Facebook</span>
                    </button>
                </div>

                <p class="text-center text-gray-600 text-sm mt-8">
                    Don't have an account?
                    <a href="#" data-container="signup-form-container" id="signup-link-login" class="text-blue-600 hover:text-blue-800 font-semibold">
                        Sign Up
                    </a>
                </p>
            </div>

            <div id="signup-form-container" class="hidden">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Create Account</h2>
                    <p class="text-gray-600 text-sm">Fill in your details to register</p>
                </div>

                <form id="signup-form" class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="signup-first-name" class="block text-sm font-semibold text-gray-700 mb-1">First Name</label>
                            <input type="text" id="signup-first-name" class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm" placeholder="First Name" required>
                        </div>
                        <div>
                            <label for="signup-last-name" class="block text-sm font-semibold text-gray-700 mb-1">Last Name</label>
                            <input type="text" id="signup-last-name" class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div>
                        <label for="signup-email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                        <input type="email" id="signup-email" class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm" placeholder="your@email.com" required>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="signup-phone" class="block text-sm font-semibold text-gray-700 mb-1">Phone</label>
                            <input type="tel" id="signup-phone" class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm" placeholder="(11) 99999-9999">
                        </div>
                        <div>
                            <label for="signup-birthdate" class="block text-sm font-semibold text-gray-700 mb-1">Birthdate</label>
                            <input type="date" id="signup-birthdate" class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="signup-password" class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                            <input type="password" id="signup-password" class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm" placeholder="••••••••" minlength="6" required>
                        </div>
                        <div>
                            <label for="signup-confirm-password" class="block text-sm font-semibold text-gray-700 mb-1">Confirm Password</label>
                            <input type="password" id="signup-confirm-password" class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm" placeholder="••••••••" required>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 px-4 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mt-6">
                        Create Account
                    </button>
                </form>

                <div class="relative flex items-center my-6">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="flex-shrink mx-4 text-gray-500 text-sm">or continue with</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <div class="space-y-3">
                    <button class="w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <img src="https://img.icons8.com/color/20/000000/google-logo.png" alt="Google" class="mr-3">
                        <span class="text-gray-700 font-medium">Google</span>
                    </button>
                    <button class="w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <img src="https://img.icons8.com/color/20/000000/facebook-new.png" alt="Facebook" class="mr-3">
                        <span class="text-gray-700 font-medium">Facebook</span>
                    </button>
                </div>

                <p class="text-center text-gray-600 text-sm mt-6">
                    Already have an account?
                    <a href="#" id="login-link-signup" data-container="signin-form-container" class="text-blue-600 hover:text-blue-800 font-semibold">
                        Log In
                    </a>
                </p>
            </div>

            <div id="forgot-password-form-container" class="hidden">
                <div class="text-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Recover Password</h2>
                    <p class="text-gray-600 text-sm">
                        Enter your email to receive the recovery link
                    </p>
                </div>

                <form id="forgot-password-form" class="space-y-5">
                    <div>
                        <label for="forgot-email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" id="forgot-email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none" placeholder="your@email.com" required>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 px-4 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Send Link
                    </button>
                </form>

                <div class="text-center mt-6">
                    <a href="#" data-container="signin-form-container" id="back-to-login-link-forgot" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Back to login
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const loginFormContainer = document.getElementById("signin-form-container");
            const signupFormContainer = document.getElementById("signup-form-container");
            const forgotPasswordFormContainer = document.getElementById(
                "forgot-password-form-container"
            );

            const signupLinkLogin = document.getElementById("signup-link-login");
            const loginLinkSignup = document.getElementById("login-link-signup");
            const forgotPasswordLink = document.getElementById("forgot-password-link");
            const backToLoginLinkForgot = document.getElementById(
                "back-to-login-link-forgot"
            );

            const showForm = (formToShow) => {
                loginFormContainer.classList.add("hidden");
                signupFormContainer.classList.add("hidden");
                forgotPasswordFormContainer.classList.add("hidden");
                formToShow.classList.remove("hidden");
            };

            for (const elem of [
                    signupLinkLogin,
                    loginLinkSignup,
                    forgotPasswordLink,
                    backToLoginLinkForgot
                ]) {
                elem.addEventListener(
                    "click",
                    (e) => {
                        e.preventDefault();
                        const container = document.getElementById(elem.dataset.container);
                        showForm(container);
                    },
                    false
                );
            }
            showForm(loginFormContainer);
        });
    </script>
    <style>
        /*! tailwindcss v4.1.8 | MIT License | https://tailwindcss.com */
        @layer properties;
        @layer theme, base, components, utilities;

        @layer theme {

            :root,
            :host {
                --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
                    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
                    "Liberation Mono", "Courier New", monospace;
                --color-blue-500: oklch(62.3% 0.214 259.815);
                --color-blue-600: oklch(54.6% 0.245 262.881);
                --color-blue-700: oklch(48.8% 0.243 264.376);
                --color-indigo-500: oklch(58.5% 0.233 277.117);
                --color-indigo-600: oklch(51.1% 0.262 276.966);
                --color-indigo-800: oklch(39.8% 0.195 277.366);
                --color-gray-50: oklch(98.5% 0.002 247.839);
                --color-gray-100: oklch(96.7% 0.003 264.542);
                --color-gray-200: oklch(92.8% 0.006 264.531);
                --color-gray-300: oklch(87.2% 0.01 258.338);
                --color-gray-500: oklch(55.1% 0.027 264.364);
                --color-gray-600: oklch(44.6% 0.03 256.802);
                --color-gray-700: oklch(37.3% 0.034 259.733);
                --color-gray-800: oklch(27.8% 0.033 256.848);
                --color-white: #fff;
                --spacing: 0.25rem;
                --container-lg: 32rem;
                --text-sm: 0.875rem;
                --text-sm--line-height: calc(1.25 / 0.875);
                --text-3xl: 1.875rem;
                --text-3xl--line-height: calc(2.25 / 1.875);
                --font-weight-medium: 500;
                --font-weight-semibold: 600;
                --font-weight-bold: 700;
                --radius-sm: 0.25rem;
                --radius-lg: 0.5rem;
                --default-transition-duration: 150ms;
                --default-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                --default-font-family: var(--font-sans);
                --default-mono-font-family: var(--font-mono);
            }
        }

        @layer base {

            *,
            ::after,
            ::before,
            ::backdrop,
            ::file-selector-button {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                border: 0 solid;
            }

            html,
            :host {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                tab-size: 4;
                font-family: var(--default-font-family,
                        ui-sans-serif,
                        system-ui,
                        sans-serif,
                        "Apple Color Emoji",
                        "Segoe UI Emoji",
                        "Segoe UI Symbol",
                        "Noto Color Emoji"
                    );
                font-feature-settings: var(--default-font-feature-settings, normal);
                font-variation-settings: var(--default-font-variation-settings, normal);
                -webkit-tap-highlight-color: transparent;
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px;
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit;
            }

            a {
                color: inherit;
                -webkit-text-decoration: inherit;
                text-decoration: inherit;
            }

            b,
            strong {
                font-weight: bolder;
            }

            code,
            kbd,
            samp,
            pre {
                font-family: var(--default-mono-font-family,
                        ui-monospace,
                        SFMono-Regular,
                        Menlo,
                        Monaco,
                        Consolas,
                        "Liberation Mono",
                        "Courier New",
                        monospace);
                font-feature-settings: var(--default-mono-font-feature-settings, normal);
                font-variation-settings: var(--default-mono-font-variation-settings,
                        normal);
                font-size: 1em;
            }

            small {
                font-size: 80%;
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline;
            }

            sub {
                bottom: -0.25em;
            }

            sup {
                top: -0.5em;
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse;
            }

            :-moz-focusring {
                outline: auto;
            }

            progress {
                vertical-align: baseline;
            }

            summary {
                display: list-item;
            }

            ol,
            ul,
            menu {
                list-style: none;
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block;
                vertical-align: middle;
            }

            img,
            video {
                max-width: 100%;
                height: auto;
            }

            button,
            input,
            select,
            optgroup,
            textarea,
            ::file-selector-button {
                font: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                letter-spacing: inherit;
                color: inherit;
                border-radius: 0;
                background-color: transparent;
                opacity: 1;
            }

            :where(select:is([multiple], [size])) optgroup {
                font-weight: bolder;
            }

            :where(select:is([multiple], [size])) optgroup option {
                padding-inline-start: 20px;
            }

            ::file-selector-button {
                margin-inline-end: 4px;
            }

            ::placeholder {
                opacity: 1;
            }

            @supports (not (-webkit-appearance: -apple-pay-button)) or (contain-intrinsic-size: 1px) {
                ::placeholder {
                    color: currentcolor;

                    @supports (color: color-mix(in lab, red, red)) {
                        color: color-mix(in oklab, currentcolor 50%, transparent);
                    }
                }
            }

            textarea {
                resize: vertical;
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none;
            }

            ::-webkit-date-and-time-value {
                min-height: 1lh;
                text-align: inherit;
            }

            ::-webkit-datetime-edit {
                display: inline-flex;
            }

            ::-webkit-datetime-edit-fields-wrapper {
                padding: 0;
            }

            ::-webkit-datetime-edit,
            ::-webkit-datetime-edit-year-field,
            ::-webkit-datetime-edit-month-field,
            ::-webkit-datetime-edit-day-field,
            ::-webkit-datetime-edit-hour-field,
            ::-webkit-datetime-edit-minute-field,
            ::-webkit-datetime-edit-second-field,
            ::-webkit-datetime-edit-millisecond-field,
            ::-webkit-datetime-edit-meridiem-field {
                padding-block: 0;
            }

            :-moz-ui-invalid {
                box-shadow: none;
            }

            button,
            input:where([type="button"], [type="reset"], [type="submit"]),
            ::file-selector-button {
                appearance: button;
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto;
            }

            [hidden]:where(:not([hidden="until-found"])) {
                display: none !important;
            }
        }

        @layer utilities {
            .relative {
                position: relative;
            }

            .mx-4 {
                margin-inline: calc(var(--spacing) * 4);
            }

            .mt-6 {
                margin-top: calc(var(--spacing) * 6);
            }

            .mr-1 {
                margin-right: calc(var(--spacing) * 1);
            }

            .mr-2 {
                margin-right: calc(var(--spacing) * 2);
            }

            .mb-2 {
                margin-bottom: calc(var(--spacing) * 2);
            }

            .mb-6 {
                margin-bottom: calc(var(--spacing) * 6);
            }

            .ml-3 {
                margin-left: calc(var(--spacing) * 3);
            }

            .block {
                display: block;
            }

            .flex {
                display: flex;
            }

            .hidden {
                display: none;
            }

            .h-4 {
                height: calc(var(--spacing) * 4);
            }

            .h-5 {
                height: calc(var(--spacing) * 5);
            }

            .min-h-screen {
                min-height: 100vh;
            }

            .w-4 {
                width: calc(var(--spacing) * 4);
            }

            .w-full {
                width: 100%;
            }

            .max-w-lg {
                max-width: var(--container-lg);
            }

            .flex-1 {
                flex: 1;
            }

            .flex-shrink {
                flex-shrink: 1;
            }

            .flex-grow {
                flex-grow: 1;
            }

            .scale-100 {
                --tw-scale-x: 100%;
                --tw-scale-y: 100%;
                --tw-scale-z: 100%;
                scale: var(--tw-scale-x) var(--tw-scale-y);
            }

            .transform {
                transform: var(--tw-rotate-x) var(--tw-rotate-y) var(--tw-rotate-z) var(--tw-skew-x) var(--tw-skew-y);
            }

            .cursor-pointer {
                cursor: pointer;
            }

            .flex-col {
                flex-direction: column;
            }

            .items-center {
                align-items: center;
            }

            .items-start {
                align-items: flex-start;
            }

            .justify-between {
                justify-content: space-between;
            }

            .justify-center {
                justify-content: center;
            }

            .gap-4 {
                gap: calc(var(--spacing) * 4);
            }

            .space-y-3 {
                :where(& > :not(:last-child)) {
                    --tw-space-y-reverse: 0;
                    margin-block-start: calc(calc(var(--spacing) * 3) * var(--tw-space-y-reverse));
                    margin-block-end: calc(calc(var(--spacing) * 3) * calc(1 - var(--tw-space-y-reverse)));
                }
            }

            .space-y-4 {
                :where(& > :not(:last-child)) {
                    --tw-space-y-reverse: 0;
                    margin-block-start: calc(calc(var(--spacing) * 4) * var(--tw-space-y-reverse));
                    margin-block-end: calc(calc(var(--spacing) * 4) * calc(1 - var(--tw-space-y-reverse)));
                }
            }

            .rounded {
                border-radius: 0.25rem;
            }

            .rounded-lg {
                border-radius: var(--radius-lg);
            }

            .rounded-sm {
                border-radius: var(--radius-sm);
            }

            .border {
                border-style: var(--tw-border-style);
                border-width: 1px;
            }

            .border-t {
                border-top-style: var(--tw-border-style);
                border-top-width: 1px;
            }

            .border-gray-300 {
                border-color: var(--color-gray-300);
            }

            .bg-blue-700 {
                background-color: var(--color-blue-700);
            }

            .bg-gray-50 {
                background-color: var(--color-gray-50);
            }

            .bg-gray-100 {
                background-color: var(--color-gray-100);
            }

            .bg-white {
                background-color: var(--color-white);
            }

            .p-8 {
                padding: calc(var(--spacing) * 8);
            }

            .px-4 {
                padding-inline: calc(var(--spacing) * 4);
            }

            .py-2 {
                padding-block: calc(var(--spacing) * 2);
            }

            .py-3 {
                padding-block: calc(var(--spacing) * 3);
            }

            .py-5 {
                padding-block: calc(var(--spacing) * 5);
            }

            .text-center {
                text-align: center;
            }

            .text-3xl {
                font-size: var(--text-3xl);
                line-height: var(--tw-leading, var(--text-3xl--line-height));
            }

            .text-sm {
                font-size: var(--text-sm);
                line-height: var(--tw-leading, var(--text-sm--line-height));
            }

            .font-bold {
                --tw-font-weight: var(--font-weight-bold);
                font-weight: var(--font-weight-bold);
            }

            .font-medium {
                --tw-font-weight: var(--font-weight-medium);
                font-weight: var(--font-weight-medium);
            }

            .font-semibold {
                --tw-font-weight: var(--font-weight-semibold);
                font-weight: var(--font-weight-semibold);
            }

            .text-gray-500 {
                color: var(--color-gray-500);
            }

            .text-gray-600 {
                color: var(--color-gray-600);
            }

            .text-gray-700 {
                color: var(--color-gray-700);
            }

            .text-gray-800 {
                color: var(--color-gray-800);
            }

            .text-indigo-600 {
                color: var(--color-indigo-600);
            }

            .text-white {
                color: var(--color-white);
            }

            .opacity-100 {
                opacity: 100%;
            }

            .shadow-2xl {
                --tw-shadow: 0 25px 50px -12px var(--tw-shadow-color, rgb(0 0 0 / 0.25));
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow),
                    var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            }

            .transition {
                transition-property: color, background-color, border-color, outline-color,
                    text-decoration-color, fill, stroke, --tw-gradient-from, --tw-gradient-via,
                    --tw-gradient-to, opacity, box-shadow, transform, translate, scale, rotate,
                    filter, -webkit-backdrop-filter, backdrop-filter, display, visibility,
                    content-visibility, overlay, pointer-events;
                transition-timing-function: var(--tw-ease,
                        var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration));
            }

            .transition-all {
                transition-property: all;
                transition-timing-function: var(--tw-ease,
                        var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration));
            }

            .duration-200 {
                --tw-duration: 200ms;
                transition-duration: 200ms;
            }

            .duration-500 {
                --tw-duration: 500ms;
                transition-duration: 500ms;
            }

            .hover\:bg-blue-600 {
                &:hover {
                    @media (hover: hover) {
                        background-color: var(--color-blue-600);
                    }
                }
            }

            .hover\:bg-gray-200 {
                &:hover {
                    @media (hover: hover) {
                        background-color: var(--color-gray-200);
                    }
                }
            }

            .hover\:text-gray-800 {
                &:hover {
                    @media (hover: hover) {
                        color: var(--color-gray-800);
                    }
                }
            }

            .hover\:text-indigo-800 {
                &:hover {
                    @media (hover: hover) {
                        color: var(--color-indigo-800);
                    }
                }
            }

            .focus\:border-indigo-500 {
                &:focus {
                    border-color: var(--color-indigo-500);
                }
            }

            .focus\:ring-2 {
                &:focus {
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentcolor);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow),
                        var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
                }
            }

            .focus\:ring-3 {
                &:focus {
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentcolor);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow),
                        var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
                }
            }

            .focus\:ring-blue-500 {
                &:focus {
                    --tw-ring-color: var(--color-blue-500);
                }
            }

            .focus\:ring-indigo-500 {
                &:focus {
                    --tw-ring-color: var(--color-indigo-500);
                }
            }

            .focus\:ring-offset-2 {
                &:focus {
                    --tw-ring-offset-width: 2px;
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                }
            }

            .focus\:outline-none {
                &:focus {
                    --tw-outline-style: none;
                    outline-style: none;
                }
            }

            .md\:flex-row {
                @media (width >=48rem) {
                    flex-direction: row;
                }
            }
        }

        @property --tw-scale-x {
            syntax: "*";
            inherits: false;
            initial-value: 1;
        }

        @property --tw-scale-y {
            syntax: "*";
            inherits: false;
            initial-value: 1;
        }

        @property --tw-scale-z {
            syntax: "*";
            inherits: false;
            initial-value: 1;
        }

        @property --tw-rotate-x {
            syntax: "*";
            inherits: false;
        }

        @property --tw-rotate-y {
            syntax: "*";
            inherits: false;
        }

        @property --tw-rotate-z {
            syntax: "*";
            inherits: false;
        }

        @property --tw-skew-x {
            syntax: "*";
            inherits: false;
        }

        @property --tw-skew-y {
            syntax: "*";
            inherits: false;
        }

        @property --tw-space-y-reverse {
            syntax: "*";
            inherits: false;
            initial-value: 0;
        }

        @property --tw-border-style {
            syntax: "*";
            inherits: false;
            initial-value: solid;
        }

        @property --tw-font-weight {
            syntax: "*";
            inherits: false;
        }

        @property --tw-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }

        @property --tw-shadow-color {
            syntax: "*";
            inherits: false;
        }

        @property --tw-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%;
        }

        @property --tw-inset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }

        @property --tw-inset-shadow-color {
            syntax: "*";
            inherits: false;
        }

        @property --tw-inset-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%;
        }

        @property --tw-ring-color {
            syntax: "*";
            inherits: false;
        }

        @property --tw-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }

        @property --tw-inset-ring-color {
            syntax: "*";
            inherits: false;
        }

        @property --tw-inset-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }

        @property --tw-ring-inset {
            syntax: "*";
            inherits: false;
        }

        @property --tw-ring-offset-width {
            syntax: "<length>";
            inherits: false;
            initial-value: 0px;
        }

        @property --tw-ring-offset-color {
            syntax: "*";
            inherits: false;
            initial-value: #fff;
        }

        @property --tw-ring-offset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }

        @property --tw-duration {
            syntax: "*";
            inherits: false;
        }

        @layer properties {
            @supports ((-webkit-hyphens: none) and (not (margin-trim: inline))) or ((-moz-orient: inline) and (not (color: rgb(from red r g b)))) {

                *,
                ::before,
                ::after,
                ::backdrop {
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    --tw-scale-z: 1;
                    --tw-rotate-x: initial;
                    --tw-rotate-y: initial;
                    --tw-rotate-z: initial;
                    --tw-skew-x: initial;
                    --tw-skew-y: initial;
                    --tw-space-y-reverse: 0;
                    --tw-border-style: solid;
                    --tw-font-weight: initial;
                    --tw-shadow: 0 0 #0000;
                    --tw-shadow-color: initial;
                    --tw-shadow-alpha: 100%;
                    --tw-inset-shadow: 0 0 #0000;
                    --tw-inset-shadow-color: initial;
                    --tw-inset-shadow-alpha: 100%;
                    --tw-ring-color: initial;
                    --tw-ring-shadow: 0 0 #0000;
                    --tw-inset-ring-color: initial;
                    --tw-inset-ring-shadow: 0 0 #0000;
                    --tw-ring-inset: initial;
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-offset-shadow: 0 0 #0000;
                    --tw-duration: initial;
                }
            }
        }

        .gradient-bg {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }
    </style> 

   
</body>

</html>