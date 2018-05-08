--
-- Database: `sss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `ID`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deathbenifit`
--

CREATE TABLE `deathbenifit` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Middle_Name` varchar(30) NOT NULL,
  `DateOfBirth` varchar(39) NOT NULL,
  `DateOfDeath` varchar(30) NOT NULL,
  `PlaceOfDeath` varchar(30) NOT NULL,
  `City_Province` varchar(30) NOT NULL,
  `TypeOfClaim` varchar(30) NOT NULL,
  `CivilStatus` varchar(20) NOT NULL,
  `ClaimantSSNumber` varchar(10) NOT NULL,
  `ClaimantLastName` varchar(30) NOT NULL,
  `ClaimantFirstName` varchar(30) NOT NULL,
  `ClaimantMiddleName` varchar(30) NOT NULL,
  `ClaimantAddress` varchar(50) NOT NULL,
  `ClaimantDateOfBirth` varchar(20) NOT NULL,
  `ClaimantGender` varchar(20) NOT NULL,
  `RelationShipToMember` varchar(20) NOT NULL,
  `ContactNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deathbenifit`
--

INSERT INTO `deathbenifit` (`ID`, `SS_Number`, `Last_Name`, `First_Name`, `Middle_Name`, `DateOfBirth`, `DateOfDeath`, `PlaceOfDeath`, `City_Province`, `TypeOfClaim`, `CivilStatus`, `ClaimantSSNumber`, `ClaimantLastName`, `ClaimantFirstName`, `ClaimantMiddleName`, `ClaimantAddress`, `ClaimantDateOfBirth`, `ClaimantGender`, `RelationShipToMember`, `ContactNumber`) VALUES
(1, '1234567890', 'deguzman', 'alejandro', 'gacuma', '1998-12-09', '2017-03-08', '2017-03-08', 'city', 'Social Security', 'Single', '1234', 'deguzman', 'alejandro', 'gacuam', '123', '2017-12-31', 'Male', 'dfgdf', '324324'),
(2, '1234567890', 'deguzman', 'alejandro', 'gacuma', '1998-12-09', '2017-03-08', '2017-03-08', 'city', 'Social Security', 'Single', '1234', 'deguzman', 'alejandro', 'gacuam', '123', '2017-12-31', 'Male', 'dfgdf', '324324'),
(5, '1234', '', '', '', '', '', '', '', 'Social Security', 'Single', '', '', '', '', '', '', 'Male', '', ''),
(6, '1234', '', '', '', '', '', '', '', 'Social Security', 'Single', '', '', '', '', '', '', 'Male', '', ''),
(7, '1234567890', 'deguzman', 'alejandro', 'gacuma', '1998-12-09', '2017-03-21', '2017-03-21', 'samar province', 'Social Security', 'Single', '5486958859', 'gialogo', 'steve', 'mara', 'tralala city', '1996-11-01', 'Male', 'classmate', '09934589348');

-- --------------------------------------------------------

--
-- Table structure for table `deathbenifitrequest`
--

CREATE TABLE `deathbenifitrequest` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` int(10) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `DateOfDeath` varchar(20) NOT NULL,
  `PlaceOfDeath` varchar(30) NOT NULL,
  `City_Province` varchar(30) NOT NULL,
  `TypeOfClaim` varchar(30) NOT NULL,
  `CivilStatus` varchar(30) NOT NULL,
  `ClaimantSSNumber` varchar(10) NOT NULL,
  `ClaimantLastName` varchar(30) NOT NULL,
  `ClaimantFirstName` varchar(30) NOT NULL,
  `ClaimantMiddleName` varchar(30) NOT NULL,
  `ClaimantAddress` varchar(60) NOT NULL,
  `ClaimantDateOfBirth` varchar(20) NOT NULL,
  `ClaimantGender` varchar(20) NOT NULL,
  `RelationShipToMember` varchar(20) NOT NULL,
  `ContactNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `directhousingloan`
--

CREATE TABLE `directhousingloan` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Ref_No` varchar(10) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentifier` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `ContactNo` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `StreetName` varchar(30) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `EmaiAddress` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `RepaymentTermInYears` int(2) NOT NULL,
  `AmountAppliedFor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directhousingloan`
--

INSERT INTO `directhousingloan` (`ID`, `SS_Number`, `Ref_No`, `DateOfBirth`, `TaxIdentifier`, `Lastname`, `Firstname`, `Middlename`, `ContactNo`, `Address`, `StreetName`, `Barangay`, `City`, `EmaiAddress`, `Gender`, `Civil_Status`, `RepaymentTermInYears`, `AmountAppliedFor`) VALUES
(21, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09777049747', '695 libis baesa caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan ', 'samar province', 'alejandrodeguzman1@gmail.com', 'Male', 'Single', 0, ''),
(23, '987654321', '1234', '1997-12-31', '1234', 'andrada', 'julius', 'reyes', '09734653475', 'calocan', 'baesa', 'brgy 160 libi baesa', 'caloocan', 'juliusandrada@yahoo.com', 'Male', 'Single', 0, ''),
(28, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09328473289', '695 libis baesa caloocan city', 'baesa', 'brgy 160 libis baesa caloocan ', 'samar provice', 'alejandrodeguzman@gmail.com', 'Male', 'Single', 1, 'secret');

-- --------------------------------------------------------

--
-- Table structure for table `directhousingloan_request`
--

CREATE TABLE `directhousingloan_request` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Ref_No` varchar(10) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentifier` varchar(20) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `ContactNo` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `StreetName` varchar(60) NOT NULL,
  `Barangay` varchar(60) NOT NULL,
  `City` varchar(50) NOT NULL,
  `EmaiAddress` varchar(60) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `RepaymentTermInYears` int(2) NOT NULL,
  `AmountAppliedFor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disabilitybenifit`
--

CREATE TABLE `disabilitybenifit` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `TypeOfClaim` varchar(20) NOT NULL,
  `TIN` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disabilitybenifit`
--

INSERT INTO `disabilitybenifit` (`ID`, `SS_Number`, `Lastname`, `Firstname`, `Middlename`, `Address`, `Street`, `Barangay`, `City`, `Contact_Number`, `Gender`, `TypeOfClaim`, `TIN`) VALUES
(1, '1234567890', 'deguzman', 'alejandro', 'gacuma', 'caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan city', 'samar province', '09777049747', 'Male', 'SS Claim', '1234'),
(2, '1234567890', 'deguzman', 'alejandro', 'gacuma', 'caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan city', 'samar province', '09777049747', 'Male', 'SS Claim', '1234'),
(3, '1234567890', 'deguzman', 'alejandro', 'gacuma', 'caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan city', 'samar province', '09777049747', 'Male', 'SS Claim', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `dissabilitybenifitrequest`
--

CREATE TABLE `dissabilitybenifitrequest` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `TypeOfClaim` varchar(20) NOT NULL,
  `TIN` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educationalassistanceloan`
--

CREATE TABLE `educationalassistanceloan` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Ref_No` varchar(10) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentifier` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `ContactNo` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `StreetName` varchar(20) NOT NULL,
  `Barangay` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `EmailAddress` varchar(60) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `BeneficiaryLastname` varchar(20) NOT NULL,
  `BeneficiaryFirstname` varchar(20) NOT NULL,
  `BeneficiaryMiddlename` varchar(20) NOT NULL,
  `RelationToMember` varchar(20) NOT NULL,
  `NameOfSchool` varchar(50) NOT NULL,
  `AddressOfSchool` varchar(50) NOT NULL,
  `RepaymentTermInYears` varchar(3) NOT NULL,
  `AmountAppliedFor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationalassistanceloan`
--

INSERT INTO `educationalassistanceloan` (`ID`, `SS_Number`, `Ref_No`, `DateOfBirth`, `TaxIdentifier`, `Lastname`, `Firstname`, `Middlename`, `ContactNo`, `Address`, `StreetName`, `Barangay`, `City`, `EmailAddress`, `Gender`, `Civil_Status`, `BeneficiaryLastname`, `BeneficiaryFirstname`, `BeneficiaryMiddlename`, `RelationToMember`, `NameOfSchool`, `AddressOfSchool`, `RepaymentTermInYears`, `AmountAppliedFor`) VALUES
(3, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '2147483647', 'libis baesa caloocan city', 'baesa', 'brgy 160 libis baesa caloocan city', 'caloocan city', 'alejandrodeguzman13@gmail.com', 'Male', 'Single', 'pascual', 'lorenz', 'cipriano', 'Legal Spouse', 'gym school', 'libis baesa caloocan city', '1', ''),
(9, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09777049747', 'libis baesa caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan city', 'samar', 'alejandrodeguzman1@gmail.com', 'Male', 'Single', 'pascual', 'lorenz', 'cipriano', 'Legal Spouse', 'gym school', 'libis baesa caloocan city', '1', ''),
(11, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09777049747', '695 libis baesa caloocan city', 'baesa', 'brgy 160 libis baesa caloocan city', 'caloocan city', 'alejandrodeguzman1@gmail.com', 'Male', 'Single', 'gialogo', 'steve', 'mara', 'Legal Spouse', 'tralala highschool', '695 libis baesa caloocan city', '1', ''),
(12, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09348563487', 'libis baesa caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan city', 'caloocan city', 'alejandrodeguzman@gmail.com', 'Male', 'Single', 'bernal', 'journal', 'deguzman', 'Legal Spouse', 'university of caloocan city', 'libis baesa caloocan city', '1', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `educationalassistanceloan_request`
--

CREATE TABLE `educationalassistanceloan_request` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Ref_No` varchar(10) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentifier` varchar(20) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `ContactNo` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `StreetName` varchar(60) NOT NULL,
  `Barangay` varchar(60) NOT NULL,
  `City` varchar(50) NOT NULL,
  `EmaiAddress` varchar(60) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `BeneficiaryLastname` varchar(50) NOT NULL,
  `BeneficiaryFirstname` varchar(50) NOT NULL,
  `BeneficiaryMiddlename` varchar(50) NOT NULL,
  `RelationToMember` varchar(50) NOT NULL,
  `NameOfSchool` varchar(50) NOT NULL,
  `AddressOfSchool` varchar(50) NOT NULL,
  `RepaymentTermInYears` varchar(2) NOT NULL,
  `AmountAppliedFor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer_registration`
--

CREATE TABLE `employer_registration` (
  `ID` bigint(20) NOT NULL,
  `Date_Coverage` varchar(20) NOT NULL,
  `Address_Line1` varchar(100) NOT NULL,
  `Address_Line2` varchar(100) NOT NULL,
  `CityProvince` varchar(50) NOT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `Landline_No` int(11) NOT NULL,
  `Mobile_No` int(11) NOT NULL,
  `PreferredUserID` varchar(70) NOT NULL,
  `CompanyEmailAd` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_registration`
--

INSERT INTO `employer_registration` (`ID`, `Date_Coverage`, `Address_Line1`, `Address_Line2`, `CityProvince`, `PostalCode`, `Landline_No`, `Mobile_No`, `PreferredUserID`, `CompanyEmailAd`) VALUES
(1, '2017-03-06', 'brygy 160 libis baesa caloocan city', 'western samar', 'samar provinces', '1400', 123, 977704974, 'deguzman123', 'alejandrodeguzman12@gmail.com'),
(2, '2017-09-07', 'brgy 158 baesa caloocan city', 'brgy 158 baesa caloocan city', 'caloocan', '1501', 2147483647, 2147483647, 'juls123', 'juliusandrada@yahoo.com'),
(3, '2017-03-13', 'maypajo caloocan city', 'maypajo caloocan city', 'caloocan', '1403', 2147483647, 1234, 'rugayan123', 'christinerugayan124@yahoo.com'),
(4, '2017-03-29', 'UE village caloocan city', 'UE village caloocan city', 'quezon province', '1405', 8700, 2147483647, 'christian', 'christianleuterio123@yahoo.com'),
(5, '2017-04-27', 'maypajo caloocan city', 'maypajo caloocan city', 'caloocan city', '1403', 214748454, 214748454, 'steve', 'stevemathewgialogo1@yahoo.com'),
(6, '2017-03-22', 'maypajo caloocan city', 'maypajo caloocan city', 'caloocan city', '1403', 2147483647, 2147483647, 'robles123', 'carlajanerobles@yahoo.com'),
(7, '2017-03-14', 'bagong barrio caloocan city', 'bagong barrio caloocan city', 'caloocan', '1400', 8700, 2147483647, 'aubreng123', 'aubreyjoyisola@yahoo.com'),
(8, '2017-03-20', 'sangandaan caloocan city ', 'sangandaan caloocan city ', 'caloocan city', '1405', 8700, 2147483647, 'aldrin12', 'lstventure@gmail.com'),
(9, '2017-03-14', 'maypajo caloocan city', 'maypajo caloocan city', 'rizal', '1400', 3453465, 2147483647, 'juandelacruz', 'juandelacruz@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `funeralbenifit`
--

CREATE TABLE `funeralbenifit` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Reference_Number` varchar(20) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Barangay` varchar(60) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `PlaceOfDeath` varchar(20) NOT NULL,
  `DateOfInterment` varchar(20) NOT NULL,
  `PlaceOfInterment` varchar(20) NOT NULL,
  `ClaimantLastname` varchar(30) NOT NULL,
  `ClaimantFirstname` varchar(30) NOT NULL,
  `ClaimantMiddlename` varchar(30) NOT NULL,
  `Relation` varchar(30) NOT NULL,
  `ClaimantSS_Number` varchar(10) NOT NULL,
  `ClaimantBirthDate` varchar(20) NOT NULL,
  `ClaimantGender` varchar(20) NOT NULL,
  `ClaimantMobileNo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funeralbenifit`
--

INSERT INTO `funeralbenifit` (`ID`, `SS_Number`, `Reference_Number`, `DateOfBirth`, `Gender`, `Lastname`, `FirstName`, `MiddleName`, `Contact_Number`, `Address`, `Barangay`, `City`, `Civil_Status`, `PlaceOfDeath`, `DateOfInterment`, `PlaceOfInterment`, `ClaimantLastname`, `ClaimantFirstname`, `ClaimantMiddlename`, `Relation`, `ClaimantSS_Number`, `ClaimantBirthDate`, `ClaimantGender`, `ClaimantMobileNo`) VALUES
(1, '1234567890', '1234', '1998-12-11', 'Male', 'deguzman', 'alejandro', 'gacuma', '09777049747', 'libis baesa caloocan city', 'brgy 160 district 1 caloocan city', 'caloocan city', 'Single', 'caloocan city', '2017-03-08', 'caloocan city', 'gialogo', 'steve', 'mara', 'classmate', '4567434576', '1996-06-11', 'Male', '09547578934'),
(2, '1234567890', '1234', '1998-12-11', 'Male', 'deguzman', 'alejandro', 'gacuma', '09777049747', 'libis baesa caloocan city', 'brgy 160 district 1 caloocan city', 'caloocan city', 'Single', 'caloocan city', '2017-03-08', 'caloocan city', 'gialogo', 'steve', 'mara', 'classmate', '4567434576', '1996-06-11', 'Male', '09547578934');

-- --------------------------------------------------------

--
-- Table structure for table `funeralbenifitrequest`
--

CREATE TABLE `funeralbenifitrequest` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Reference_Number` varchar(20) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Barangay` varchar(60) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `PlaceOfDeath` varchar(20) NOT NULL,
  `DateOfInterment` varchar(20) NOT NULL,
  `PlaceOfInterment` varchar(20) NOT NULL,
  `ClaimantLastname` varchar(20) NOT NULL,
  `ClaimantFirstname` varchar(20) NOT NULL,
  `ClaimantMiddlename` varchar(20) NOT NULL,
  `Relation` varchar(20) NOT NULL,
  `ClaimantSS_Number` varchar(11) NOT NULL,
  `ClaimantBirthDate` varchar(20) NOT NULL,
  `ClaimantGender` varchar(20) NOT NULL,
  `ClaimantMobileNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `household_registration`
--

CREATE TABLE `household_registration` (
  `ID` bigint(20) NOT NULL,
  `Date_Coverage` varchar(20) NOT NULL,
  `Landline_Number` int(11) NOT NULL,
  `Mobile_Number` bigint(11) NOT NULL,
  `Preferred_User_ID` varchar(50) NOT NULL,
  `HR_Email_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household_registration`
--

INSERT INTO `household_registration` (`ID`, `Date_Coverage`, `Landline_Number`, `Mobile_Number`, `Preferred_User_ID`, `HR_Email_Address`) VALUES
(1, '2015-12-11', 870, 9777049747, 'deguzman1234', 'alejandrodeguzman1@gmail.com'),
(2, '2017-02-09', 8700, 9897778778, 'steve123', 'stevemathew@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `listofcontribution`
--

CREATE TABLE `listofcontribution` (
  `ID` bigint(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `AmountOfContribution` int(10) NOT NULL,
  `DateOfContribution` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listofcontribution`
--

INSERT INTO `listofcontribution` (`ID`, `firstname`, `middlename`, `lastname`, `SS_Number`, `AmountOfContribution`, `DateOfContribution`) VALUES
(4, 'alejandro', 'gacuma', 'deguzman', '1234567890', 500, '2017-03-10'),
(5, 'julius', 'reyes', 'andrada', '2468101213', 300, '2017-03-15'),
(6, 'alejandro', 'gacuma', 'deguzman', '1234567890', 300, '2017-05-25'),
(7, 'alejandro', 'gacuma', 'deguzman', '1234567890', 400, '2017-06-13'),
(8, 'alejandro', 'gacuma', 'deguzman', '1234567890', 400, '2017-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `loan_history`
--

CREATE TABLE `loan_history` (
  `ID` bigint(20) NOT NULL,
  `SS_number` varchar(10) NOT NULL,
  `loan_date` varchar(20) NOT NULL,
  `TypeOfLoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_history`
--

INSERT INTO `loan_history` (`ID`, `SS_number`, `loan_date`, `TypeOfLoan`) VALUES
(1, '1234567890', '2017-03-15', 'Direct Housing Loan'),
(4, '1234567890', '2017-03-16', 'Educational Assistant'),
(5, '1234567890', '2017-03-16', 'Maternity Benifit'),
(6, '1234567890', '2017-03-24', 'Sickness Benifit'),
(7, '1234567890', '2017-03-16', 'Death Benifit'),
(8, '1234567890', '2017-12-11', 'Funeral Benifit'),
(9, '1234567890', '2017-03-09', 'Disability Benifit'),
(10, '1234567890', '2017-03-24', 'Retirement Benifit'),
(11, '1234567890', '', 'Maternity Benifit'),
(12, '123', '', 'Retirement Benifit'),
(13, '1234567890', '', 'Direct Housing Loan'),
(14, '987654321', '', 'Direct Housing Loan'),
(15, '123', '2017-03-31', 'Direct Housing Loan'),
(16, 'undefined', 'undefined', 'Direct Housing Loan'),
(17, 'undefined', 'undefined', 'Direct Housing Loan'),
(18, 'undefined', 'undefined', 'Direct Housing Loan'),
(19, '1234567890', '2017-03-23', 'Educational Assistance Loan'),
(20, '1234567890', '2017-03-25', 'Direct Housing Loan');

-- --------------------------------------------------------

--
-- Table structure for table `maternitybenifit`
--

CREATE TABLE `maternitybenifit` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Ref_No` varchar(20) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentifier` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `ContactNumber` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Maternitiy_leave` varchar(20) NOT NULL,
  `Date_Deliver` varchar(20) NOT NULL,
  `Diagnosis` varchar(20) NOT NULL,
  `BankName` varchar(30) NOT NULL,
  `BankBranch` varchar(30) NOT NULL,
  `BankAccountName` varchar(30) NOT NULL,
  `BankAccountNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maternitybenifit`
--

INSERT INTO `maternitybenifit` (`ID`, `SS_Number`, `Ref_No`, `DateOfBirth`, `TaxIdentifier`, `Lastname`, `Firstname`, `Middlename`, `ContactNumber`, `Address`, `Street`, `Barangay`, `City`, `Maternitiy_leave`, `Date_Deliver`, `Diagnosis`, `BankName`, `BankBranch`, `BankAccountName`, `BankAccountNumber`) VALUES
(1, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09777049747', 'caloocan', 'baesa', 'brgy 160 libis baesa caloocan ', 'caloocan city', '2017-03-14', '2017-03-15', 'Normal', 'BPI caloocan', 'edsa bagong barrio caloocan ci', 'deguzman', '1234'),
(2, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09777049747', 'libis baesa caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan ', 'caloocan city', '2017-03-08', '2017-03-28', 'Normal', 'BPI caloocan', 'edsa bagong barrio caloocan ci', 'deguzman', '12345'),
(7, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', '09777049747', '695 libis baesa caloocan city', 'baesa ', 'brgy 160 libis baesa caloocan ', 'caloocan city', '2017-03-14', '2017-04-07', 'Normal', 'BPI caloocan', 'edsa bagong barrio caloocan ci', 'deguzman', '12345'),
(8, '1234567890', '12345', '1998-12-09', '12345', 'deguzman', 'alejandro', 'gacuma', '09777035903', 'caloocan city', 'baesa caloocan city', 'brgy 160 libis baesa caloocan ', 'caloocan city', '2017-03-07', '2017-03-25', 'Normal', 'BDO caloocan city', 'edsa bagong barrio caloocan ci', 'deguzman', '1254');

-- --------------------------------------------------------

--
-- Table structure for table `maternitybenifitrequest`
--

CREATE TABLE `maternitybenifitrequest` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` int(10) NOT NULL,
  `Ref_No` varchar(20) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentifier` varchar(20) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Maternitiy_leave` varchar(20) NOT NULL,
  `Date_Deliver` varchar(20) NOT NULL,
  `Diagnosis` varchar(30) NOT NULL,
  `BankName` varchar(30) NOT NULL,
  `BankBranch` varchar(30) NOT NULL,
  `BankAccountName` varchar(30) NOT NULL,
  `BankAccountNumber` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_registration`
--

CREATE TABLE `member_registration` (
  `ID` bigint(20) NOT NULL,
  `CRN_SSNumber` bigint(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `LoanSchedule` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`ID`, `CRN_SSNumber`, `firstname`, `middlename`, `lastname`, `birthday`, `email_address`, `LoanSchedule`) VALUES
(1, 1234567890, 'alejandro', 'gacuma', 'deguzman', '1998-12-10', 'alejandrodeguzman@gmail.com', '2017-03-25'),
(2, 2468101213, 'julius', 'reyes', 'andrada', '1997-12-31', 'juliusandrada@yahoo.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `requestchange`
--

CREATE TABLE `requestchange` (
  `ID` bigint(20) NOT NULL,
  `CRN_SSNumber` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `log` varchar(267) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retirementbenifit`
--

CREATE TABLE `retirementbenifit` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `PlaceOfBirth` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Telephone_Number` varchar(8) NOT NULL,
  `Mobile_Number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retirementbenifit`
--

INSERT INTO `retirementbenifit` (`ID`, `SS_Number`, `Lastname`, `Firstname`, `Middlename`, `Address`, `DateOfBirth`, `PlaceOfBirth`, `Gender`, `Telephone_Number`, `Mobile_Number`) VALUES
(1, '1234567890', 'deguzman', 'alejandro', 'gacuma', 'libis baesa caloocan city', '1998-12-11', 'caloocan city', 'Male', '8700', '09777049747'),
(2, '1234567890', 'deguzman', 'alejandro', 'gacuma', 'libis baesa caloocan city', '1998-12-11', 'caloocan city', 'Male', '8700', '09777049747'),
(3, '1234567890', 'deguzman', 'alejandro', 'gacuma', 'brgy 160 libis baesa caloocan city', '1998-12-11', 'caloocan city', 'Male', '8700', '09777049747');

-- --------------------------------------------------------

--
-- Table structure for table `retirementbenifitrequest`
--

CREATE TABLE `retirementbenifitrequest` (
  `ID` bigint(20) NOT NULL,
  `SS_Number` varchar(10) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `PlaceOfBirth` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Telephone_Number` varchar(8) NOT NULL,
  `Mobile_Number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sicknessbenifit`
--

CREATE TABLE `sicknessbenifit` (
  `ID` bigint(20) NOT NULL,
  `SSNumber` varchar(10) NOT NULL,
  `Reference_No` varchar(20) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentification` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `StreetName` varchar(50) NOT NULL,
  `Barangay` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Telephone_No` varchar(7) NOT NULL,
  `Mobile_No` varchar(11) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Benifit_Type` varchar(20) NOT NULL,
  `PlaceOfConfinement` varchar(50) NOT NULL,
  `BankNameAndBranch` varchar(50) NOT NULL,
  `BankBranchAddress` varchar(50) NOT NULL,
  `BankAccountName` varchar(50) NOT NULL,
  `BankAccountNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sicknessbenifit`
--

INSERT INTO `sicknessbenifit` (`ID`, `SSNumber`, `Reference_No`, `DateOfBirth`, `TaxIdentification`, `Lastname`, `Firstname`, `Middlename`, `Civil_Status`, `Address`, `StreetName`, `Barangay`, `City`, `Gender`, `Telephone_No`, `Mobile_No`, `Email_Address`, `Benifit_Type`, `PlaceOfConfinement`, `BankNameAndBranch`, `BankBranchAddress`, `BankAccountName`, `BankAccountNumber`) VALUES
(6, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', 'Single', 'caloocan city', 'baesa', 'brgy 160 libis baesa caloocan city', 'caloocan city', 'Male', '8700', '09777049747', 'alejandrodeguzman1@gmail.com', 'SS', 'Home', 'BPI caloocan', 'edsa bagong barrio caloocan city', 'deguzman', '1234'),
(7, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', 'Single', 'caloocan city', 'baesa', 'brgy 160 libis baesa caloocan city', 'caloocan city', 'Male', '8700', '09777049747', 'alejandrodeguzman@gmail.com', 'SS', 'Home', 'BDO caloocan', 'edsa bagong barrio caloocan city', 'deguzman', '12345'),
(8, '3434324', '', '', '', '', '', '', 'Single', '', '', '', '', 'Male', '', '', '', 'SS', 'Home', '', '', '', ''),
(9, '1234567890', '1234', '1998-12-09', '1234', 'deguzman', 'alejandro', 'gacuma', 'Single', '695 libis baesa caloocan city', 'baesa', 'brgy 160 libis baesa caloocan city', 'samar province', 'Male', '9348593', '09777049747', 'alejandrodeguzman1@gmail.com', 'SS', 'Home', 'BDO caloocan', 'edsa bagong barrio caloocan city', 'deguzman', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `sicknessbenifitrequest`
--

CREATE TABLE `sicknessbenifitrequest` (
  `ID` bigint(20) NOT NULL,
  `SSNumber` int(10) NOT NULL,
  `Reference_No` varchar(20) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `TaxIdentification` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `StreetName` varchar(50) NOT NULL,
  `Barangay` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Telephone_No` varchar(7) NOT NULL,
  `Mobile_No` varchar(11) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Benifit_Type` varchar(20) NOT NULL,
  `PlaceOfConfinement` varchar(50) NOT NULL,
  `BankNameAndBranch` varchar(60) NOT NULL,
  `BankBranchAddress` varchar(60) NOT NULL,
  `BankAccountName` varchar(60) NOT NULL,
  `BankAccountNumber` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deathbenifit`
--
ALTER TABLE `deathbenifit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deathbenifitrequest`
--
ALTER TABLE `deathbenifitrequest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `directhousingloan`
--
ALTER TABLE `directhousingloan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `directhousingloan_request`
--
ALTER TABLE `directhousingloan_request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `disabilitybenifit`
--
ALTER TABLE `disabilitybenifit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dissabilitybenifitrequest`
--
ALTER TABLE `dissabilitybenifitrequest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `educationalassistanceloan`
--
ALTER TABLE `educationalassistanceloan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `educationalassistanceloan_request`
--
ALTER TABLE `educationalassistanceloan_request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employer_registration`
--
ALTER TABLE `employer_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `funeralbenifit`
--
ALTER TABLE `funeralbenifit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `funeralbenifitrequest`
--
ALTER TABLE `funeralbenifitrequest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `household_registration`
--
ALTER TABLE `household_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `listofcontribution`
--
ALTER TABLE `listofcontribution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loan_history`
--
ALTER TABLE `loan_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `maternitybenifit`
--
ALTER TABLE `maternitybenifit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `maternitybenifitrequest`
--
ALTER TABLE `maternitybenifitrequest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member_registration`
--
ALTER TABLE `member_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requestchange`
--
ALTER TABLE `requestchange`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `retirementbenifit`
--
ALTER TABLE `retirementbenifit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `retirementbenifitrequest`
--
ALTER TABLE `retirementbenifitrequest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sicknessbenifit`
--
ALTER TABLE `sicknessbenifit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sicknessbenifitrequest`
--
ALTER TABLE `sicknessbenifitrequest`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deathbenifit`
--
ALTER TABLE `deathbenifit`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `deathbenifitrequest`
--
ALTER TABLE `deathbenifitrequest`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `directhousingloan`
--
ALTER TABLE `directhousingloan`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `directhousingloan_request`
--
ALTER TABLE `directhousingloan_request`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disabilitybenifit`
--
ALTER TABLE `disabilitybenifit`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dissabilitybenifitrequest`
--
ALTER TABLE `dissabilitybenifitrequest`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educationalassistanceloan`
--
ALTER TABLE `educationalassistanceloan`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `educationalassistanceloan_request`
--
ALTER TABLE `educationalassistanceloan_request`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employer_registration`
--
ALTER TABLE `employer_registration`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `funeralbenifit`
--
ALTER TABLE `funeralbenifit`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `funeralbenifitrequest`
--
ALTER TABLE `funeralbenifitrequest`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `household_registration`
--
ALTER TABLE `household_registration`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `listofcontribution`
--
ALTER TABLE `listofcontribution`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loan_history`
--
ALTER TABLE `loan_history`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `maternitybenifit`
--
ALTER TABLE `maternitybenifit`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `maternitybenifitrequest`
--
ALTER TABLE `maternitybenifitrequest`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requestchange`
--
ALTER TABLE `requestchange`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `retirementbenifit`
--
ALTER TABLE `retirementbenifit`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `retirementbenifitrequest`
--
ALTER TABLE `retirementbenifitrequest`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sicknessbenifit`
--
ALTER TABLE `sicknessbenifit`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sicknessbenifitrequest`
--
ALTER TABLE `sicknessbenifitrequest`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
