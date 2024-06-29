<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS Folder/index.scss">
    <link rel="stylesheet" href="../CSS Folder/profiling.scss">
    <title>Document</title>
</head>
<body>
    <main>
        <nav>
            <div class="locator"></div>
            <ul>
                <li>
                    <a class="dsb" href="dashboard.php">&nbsp;&nbsp;Dashboard&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li>
                    <a class="prf default" href="profiling.php">&nbsp;&nbsp;Profiling&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li>
                    <a class="prfs" href="profiles.php">&nbsp;&nbsp;Profiles&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li>
                    <a class="prl" href="payroll.php">&nbsp;&nbsp;Payroll&nbsp;&nbsp;&nbsp;</a>
                </li>
            </ul>
        </nav>
        <div class="main-content">
            <form action="save_profile.php" method="POST">
                <h2>Employee Profiling</h2>
                
                <h3>Personal Information</h3>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required><br>
                
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required><br>
                
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select><br>
                
                <label for="maritalStatus">Marital Status:</label>
                <select id="maritalStatus" name="maritalStatus" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select><br>
                
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required><br>
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required><br>
                
                <label for="contactNumber">Contact Number:</label>
                <input type="tel" id="contactNumber" name="contactNumber" required><br>
                
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required><br>
                
                <label for="emergencyContact">Emergency Contact Name:</label>
                <input type="text" id="emergencyContact" name="emergencyContact" required><br>
                
                <label for="emergencyContactNumber">Emergency Contact Number:</label>
                <input type="tel" id="emergencyContactNumber" name="emergencyContactNumber" required><br>
                
                <h3>Employment Information</h3>
                <label for="employeeID">Employee ID:</label>
                <input type="text" id="employeeID" name="employeeID" required><br>
                
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" required><br>
                
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required><br>
                
                <label for="dateOfJoining">Date of Joining:</label>
                <input type="date" id="dateOfJoining" name="dateOfJoining" required><br>
                
                <label for="employmentType">Employment Type:</label>
                <select id="employmentType" name="employmentType" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                </select><br>
                
                <label for="employmentStatus">Employment Status:</label>
                <select id="employmentStatus" name="employmentStatus" required>
                    <option value="Active">Active</option>
                    <option value="On Leave">On Leave</option>
                    <option value="Terminated">Terminated</option>
                </select><br>
                
                <label for="reportingManager">Reporting Manager:</label>
                <input type="text" id="reportingManager" name="reportingManager" required><br>
                
                <label for="officeLocation">Office Location:</label>
                <input type="text" id="officeLocation" name="officeLocation" required><br>
                
                <h3>Job Details</h3>
                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription" required></textarea><br>
                
                <label for="jobGrade">Job Grade/Level:</label>
                <input type="text" id="jobGrade" name="jobGrade" required><br>
                
                <label for="workSchedule">Work Schedule:</label>
                <input type="text" id="workSchedule" name="workSchedule" required><br>
                
                <label for="workHours">Work Hours:</label>
                <input type="text" id="workHours" name="workHours" required><br>
                
                <label for="probationPeriod">Probation Period:</label>
                <input type="text" id="probationPeriod" name="probationPeriod" required><br>
                
                <label for="promotionHistory">Promotion and Transfer History:</label>
                <textarea id="promotionHistory" name="promotionHistory" required></textarea><br>
                
                <h3>Compensation and Benefits</h3>
                <label for="basicSalary">Basic Salary:</label>
                <input type="number" id="basicSalary" name="basicSalary" required><br>
                
                <label for="allowances">Allowances:</label>
                <input type="number" id="allowances" name="allowances" required><br>
                
                <label for="bonuses">Bonuses:</label>
                <input type="number" id="bonuses" name="bonuses" required><br>
                
                <label for="payGrade">Pay Grade/Scale:</label>
                <input type="text" id="payGrade" name="payGrade" required><br>
                
                <label for="bankAccount">Bank Account Details:</label>
                <input type="text" id="bankAccount" name="bankAccount" required><br>
                
                <label for="taxID">Tax ID:</label>
                <input type="text" id="taxID" name="taxID" required><br>
                
                <label for="benefits">Benefits Information:</label>
                <textarea id="benefits" name="benefits" required></textarea><br>
                
                <label for="leaveBalance">Leave Entitlement and Balance:</label>
                <input type="number" id="leaveBalance" name="leaveBalance" required><br>
                
                <label for="overtimeRates">Overtime Rates:</label>
                <input type="number" id="overtimeRates" name="overtimeRates" required><br>
                
                <h3>Qualifications and Skills</h3>
                <label for="education">Educational Background:</label>
                <textarea id="education" name="education" required></textarea><br>
                
                <label for="certifications">Professional Certifications:</label>
                <textarea id="certifications" name="certifications" required></textarea><br>
                
                <label for="skills">Skills and Competencies:</label>
                <textarea id="skills" name="skills" required></textarea><br>
                
                <label for="languages">Languages Spoken:</label>
                <input type="text" id="languages" name="languages" required><br>
                
                <h3>Work Experience</h3>
                <label for="workExperience">Previous Employment History:</label>
                <textarea id="workExperience" name="workExperience" required></textarea><br>
                
                <label for="references">References:</label>
                <textarea id="references" name="references" required></textarea><br>
                
                <h3>Documents and Compliance</h3>
                <label for="idProofs">ID Proofs (Passport, Driver’s License, National ID):</label>
                <textarea id="idProofs" name="idProofs" required></textarea><br>
                
                <label for="workAuthorization">Work Authorization/Visa Details:</label>
                <textarea id="workAuthorization" name="workAuthorization" required></textarea><br>
                
                <label for="contracts">Signed Contracts and Agreements:</label>
                <textarea id="contracts" name="contracts" required></textarea><br>
                
                <label for="policies">Acknowledgment of Company Policies:</label>
                <textarea id="policies" name="policies" required></textarea><br>
                
                <h3>Notes and Additional Information</h3>
                <label for="additionalNotes">Additional Notes:</label>
                <textarea id="additionalNotes" name="additionalNotes"></textarea><br>
                
                <button type="submit">Save Profile</button>
            </form>
        </div>
        <div class="bottom-left"></div>
    </main>
</body>
</html>

<script src="../JS Folder/hover.js" ></script>
