# Landing Page Feature

## Overview
MASTER_LANDING_VERSION="1.1-BASE"

This feature provides a dynamic and responsive landing page layout designed to effectively showcase key information about your product or service. It includes a top navigation bar, a prominent header, an engaging aside section, and a detailed features section.

## Features

### Responsive Navigation Bar
- **Fixed Position**: The navigation bar remains at the top of the page and is always visible as users scroll.
- **Brand Display**: Features the brand name prominently and links back to the top of the page.
- **Collapsible Menu**: Adapts for smaller screens with a toggle button to expand or collapse the navigation menu.
- **Navigation Links**: Provides quick access to various sections of the page.
- **Support Dropdown**: Includes a dropdown menu for support channels such as Telegram, WhatsApp, and YouTube (if available).

### Header Section
- **Main Title**: Prominently displays the main title of the page.
- **Description**: Provides a brief description related to the title.
- **Download Options**: Includes a button with a dropdown menu for downloading the app from various stores (e.g., Google Play, Samsung Store, Mi Store, etc.).
- **Device Mockup**: Features a device mockup showcasing an app screenshot.

### Aside Section
- **Full-Width Layout**: Stretches across the full width of the page.
- **Dynamic Background Color**: Background color is customizable via Blade variables.
- **Centered Text**: Displays centered text with a large font size and contrasting color.

### Features Section
- **Feature Grid**: Highlights various features with icons, titles, and descriptions.
- **Device Mockup**: Includes a device mockup to visually present the app features.

## Dependencies
- **Bootstrap 5**: For responsive design and styling.
- **FontAwesome**: For iconography used in buttons and navigation.
- **AOS (Animate On Scroll)**: For scroll-triggered animations.

## Setup
1. Ensure Bootstrap 5 and FontAwesome are included in your project.
2. Include the AOS library for animations.
3. Populate the Blade variables in your Laravel controller.
4. Customize the device mockups and images as needed.
