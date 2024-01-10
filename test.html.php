<?php  // Include the TCPDF library
require_once('../erp/tcpdf/tcpdf.php');
?>
<?php
// Include the TCPDF library
require_once('../erp/tcpdf/tcpdf.php');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Start output buffering
    ob_start();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Generate PDF with PHP</title>
    </head>
    <body>
        <h1>Generate PDF with PHP</h1>
        <form method="post" action="">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br><br>

            <input type="submit" name="submit">
        </form>

        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            <tr>
                <td><?php echo $first_name; ?></td>
                <td><?php echo $last_name; ?></td>
            </tr>
        </table>
    </body>
    </html>

    <?php
    // Get the buffered HTML content
    $html = ob_get_clean();

    // Create a new PDF instance
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set PDF meta data
    $pdf->SetCreator('Your Name');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('PDF Example');
    $pdf->SetSubject('Generating PDF from PHP');
    $pdf->SetKeywords('PDF, PHP');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('times', '', 12);

    // Add content to the PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Save the PDF as a file or display it
    $pdf->Output('example.pdf', 'I');
    exit; // Exit the script after generating the PDF
}
?>

 <!-- Form and table HTML (outside the PHP block) goes here -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate PDF with PHP</title>
</head>
<body>
    <h1>Generate PDF with PHP</h1>
    <form method="post" action="">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <input type="submit" name="submit">
    </form>
</body>
</html> 
