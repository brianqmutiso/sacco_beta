-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 10:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uzimacre_ul`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_key`, `setting_value`) VALUES
(1, 'allow_self_registration', '0'),
(2, 'allow_client_login', '0'),
(3, 'welcome_note', 'Welcome to our company. You can login with your username and password'),
(4, 'allow_client_apply', '0'),
(5, 'enable_online_payment', '0'),
(6, 'paynow_key', NULL),
(7, 'paynow_id', NULL),
(8, 'paypal_enabled', '0'),
(9, 'paynow_enabled', '0'),
(10, 'client_registration_required_fields', ''),
(11, 'client_auto_activate_account', '0'),
(12, 'client_request_guarantor', '0'),
(13, 'auto_post_savings_interest', '0'),
(14, 'update_url', 'http://webstudio.co.zw/ulm/update'),
(15, 'client_login_background', 'UCS LTD.png'),
(16, 'stripe_secret_key', NULL),
(17, 'stripe_publishable_key', NULL),
(18, 'stripe_enabled', '0'),
(19, 'allow_bank_overdraw', '1'),
(20, 'expenses_chart_id', ''),
(21, 'income_chart_id', ''),
(22, 'payroll_chart_id', '4'),
(23, 'active_theme', 'limitless'),
(24, 'mpesa_consumer_key', NULL),
(25, 'mpesa_consumer_secret', NULL),
(26, 'mpesa_shortcode', NULL),
(27, 'mpesa_endpoint', 'https://sandbox.safaricom.co.ke'),
(28, 'mpesa_initiator', NULL),
(29, 'mpesa_enabled', '0'),
(30, 'default_online_payment_method', ''),
(31, 'timezone', 'Africa/Blantyre'),
(32, 'auto_download_update', '0'),
(33, 'update_notification', ''),
(34, 'update_last_checked', ''),
(35, 'header_javascript', ''),
(36, 'footer_javascript', ''),
(37, 'company_name', 'UZIMA CREDIT SERVICES LTD'),
(38, 'company_address', 'Niarobi, Kenya'),
(39, 'company_currency', 'KSH'),
(40, 'company_website', 'http://uzimacreditservices.co.ke'),
(41, 'company_country', '113'),
(42, 'system_version', '1.0'),
(43, 'sms_enabled', '1'),
(44, 'active_sms', NULL),
(45, 'portal_address', 'http://www.'),
(46, 'company_email', 'info@uzimacreditservices.co.ke'),
(47, 'currency_symbol', 'Ksh.'),
(48, 'currency_position', 'left'),
(49, 'company_logo', 'UCS LTD.png'),
(50, 'twilio_sid', ''),
(51, 'twilio_token', ''),
(52, 'twilio_phone_number', ''),
(53, 'routesms_host', ''),
(54, 'routesms_username', ''),
(55, 'routesms_password', ''),
(56, 'routesms_port', ''),
(57, 'sms_sender', ''),
(58, 'clickatell_username', ''),
(59, 'clickatell_password', ''),
(60, 'clickatell_api_id', ''),
(61, 'paypal_email', NULL),
(62, 'currency', 'USD'),
(63, 'password_reset_subject', 'Password reset instructions'),
(64, 'password_reset_template', 'Password reset instructions'),
(65, 'payment_received_sms_template', 'Dear {borrowerFirstName}, we have received your payment of ${paymentAmount} for loan {loanNumber}. New loan balance:${loanBalance}. Thank you'),
(66, 'payment_received_email_template', '<p>Dear {borrowerFirstName}, we have received your payment of ${paymentAmount} for loan {loanNumber}. New loan balance:${loanBalance}. Thank you</p>'),
(67, 'payment_received_email_subject', 'Payment Received'),
(68, 'payment_email_subject', 'Payment Receipt'),
(69, 'payment_email_template', '<p>Dear {borrowerFirstName}, find attached receipt of your payment of ${paymentAmount} for loan {loanNumber} on {paymentDate}. New loan balance:${loanBalance}. Thank you</p>'),
(70, 'borrower_statement_email_subject', 'Client Statement'),
(71, 'borrower_statement_email_template', '<p>Dear {borrowerFirstName}, find attached statement of your loans with us. Thank you</p>'),
(72, 'loan_statement_email_subject', 'Loan Statement'),
(73, 'loan_statement_email_template', '<p>Dear {borrowerFirstName}, find attached loan statement for loan {loanNumber}. Thank you</p>'),
(74, 'loan_schedule_email_subject', 'Loan Schedule'),
(75, 'loan_schedule_email_template', '<p>Dear {borrowerFirstName}, find attached loan schedule for loan {loanNumber}. Thank you</p>'),
(76, 'cron_last_run', ''),
(77, 'auto_apply_penalty', '1'),
(78, 'auto_payment_receipt_sms', '1'),
(79, 'auto_payment_receipt_email', '1'),
(80, 'auto_repayment_sms_reminder', '1'),
(81, 'auto_repayment_email_reminder', '1'),
(82, 'auto_repayment_days', '4'),
(83, 'auto_overdue_repayment_sms_reminder', '1'),
(84, 'auto_overdue_repayment_email_reminder', '1'),
(85, 'auto_overdue_repayment_days', '1'),
(86, 'auto_overdue_loan_sms_reminder', '1'),
(87, 'auto_overdue_loan_email_reminder', '1'),
(88, 'auto_overdue_loan_days', '1'),
(89, 'loan_overdue_email_subject', 'Loan Overdue'),
(90, 'loan_overdue_email_template', '<p>Dear {borrowerFirstName}, Your loan {loanNumber} is overdue. Please make your payment. Thank you</p>'),
(91, 'loan_overdue_sms_template', 'Dear {borrowerFirstName}, Your loan {loanNumber} is overdue. Please make your payment. Thank you'),
(92, 'loan_payment_reminder_subject', 'Upcoming Payment Reminder'),
(93, 'loan_payment_reminder_email_template', '<p>Dear {borrowerFirstName},You have an upcoming payment of {paymentAmount} due on {paymentDate} for loan {loanNumber}. Please make your payment. Thank you</p>'),
(94, 'loan_payment_reminder_sms_template', '{borrowerFirstName}, this a reminder of your weekly loan installment (Payment Amount) which due today {paymentDate} for loan {loanNumber}. Please make your payment. Paybill No: 4041059, Account No: ID No'),
(95, 'missed_payment_email_subject', 'Missed Payment'),
(96, 'missed_payment_email_template', '<p>Dear {borrowerFirstName},You missed payment of {paymentAmount} which was due on {paymentDate} for loan {loanNumber}. Please make your payment. Thank you</p>'),
(97, 'missed_payment_sms_template', '{borrowerFirstName},You missed  payment of {paymentAmount} which was due on {paymentDate} for loan {loanNumber}. Please make your payment ASAP before a PENALTY of 20% is charged. Thank you'),
(98, 'enable_cron', '0'),
(99, 'infobip_username', ''),
(100, 'infobip_password', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_setting_key_unique` (`setting_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
