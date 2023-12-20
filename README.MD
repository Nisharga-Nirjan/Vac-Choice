# Vac-Choice Project [Requirements Not Completed Yet]

## Project Description

Vac-Choice is a web-based system designed to facilitate the vaccine request process for users. Users can choose their preferred vaccine, select a hospital, specify a date, and receive confirmation. The system also allows users to manage their profile details, view vaccine request history, check payment status, and monitor vaccine delivery information. An admin panel is provided for administrators to oversee contracted hospitals and user registrations.

## Requirements

### Requirement 1: Requesting Vaccine

- Users can select a vaccine from a list.
- Users can choose a hospital from a filtered list.
- Users can pick a date from an available calendar.
- Notification is provided if the desired vaccine is unavailable, allowing users to re-request.

### Requirement 2: View and Modification of Details

- Users can view and edit general details provided during signup.
- Users can check their vaccine request history.
- Users can review payment status and delivery information for requested vaccines.

### Requirement 3: OTP Verification (Replaced By Prompt)

- Users can provide a phone number or email for receiving OTP.
- Three attempts are allowed to enter OTP within a given timeframe.
- Users can re-request OTP after a failure.

### Requirement 4: Managing Users

- Admin can view user details directly.
- Admin can search for users based on their name, NID, etc.
- Admin can modify payment and delivery statuses.
- Admin can delete suspicious user accounts.

### Requirement 5: Managing Hospitals

- Admin can view hospital details directly.
- Admin can search for hospitals based on their name or hospital ID.
- Admin can add hospitals and details affiliated with the system.
- Admin can modify vaccine amounts and available dates for hospitals.


# Project Documentation

- [Laravel Info](LARAVEL.md)