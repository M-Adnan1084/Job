<?php
$applications = [
    ['job_title' => 'Software Engineer', 'application_status' => 'Pending', 'interview_status' => 'Not Scheduled']
];

$relevant_jobs = [
    ['job_title' => 'Software Engineer', 'company' => 'TechCorp', 'location' => 'Dhaka']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Applicant Dashboard</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <div class="dashboard">
        <h1>Job Applicant Dashboard</h1>
        <h2>Your Applications</h2>
        <table>
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Application Status</th>
                    <th>Interview Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applications as $app): ?>
                <tr>
                    <td><?php echo htmlspecialchars($app['job_title']); ?></td>
                    <td><?php echo htmlspecialchars($app['application_status']); ?></td>
                    <td><?php echo htmlspecialchars($app['interview_status']); ?></td>
                    <td>
                        <button class="action-button edit">Edit</button>
                        <button class="action-button cancel">Cancel</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <h2>Relevant Jobs</h2>
        <table>
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Apply</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relevant_jobs as $job): ?>
                <tr>
                    <td><?php echo htmlspecialchars($job['job_title']); ?></td>
                    <td><?php echo htmlspecialchars($job['company']); ?></td>
                    <td><?php echo htmlspecialchars($job['location']); ?></td>
                    <td>
                        <button class="action-button apply">Apply</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>