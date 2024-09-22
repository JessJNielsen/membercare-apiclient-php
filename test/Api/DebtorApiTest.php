<?php
/**
 * DebtorApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Membercare API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * Contact: support@membercare.dk
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Membercare\Client;

use Membercare\Client\Configuration;
use Membercare\Client\ApiException;
use Membercare\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * DebtorApiTest Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DebtorApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for debtorApi
     *
     * Gets a Debtor by the given debtorAccountNumber.
     *
     */
    public function testDebtorApi()
    {
    }

    /**
     * Test case for debtorsApi
     *
     * Gets Debtors that has changed after the given date..
     *
     */
    public function testDebtorsApi()
    {
    }

    /**
     * Test case for deleteOpenPaymentByExternalId
     *
     * Deletes all open payments matching given external id..
     *
     */
    public function testDeleteOpenPaymentByExternalId()
    {
    }

    /**
     * Test case for deleteOpenPaymentById
     *
     * Deletes an open payment by given id..
     *
     */
    public function testDeleteOpenPaymentById()
    {
    }

    /**
     * Test case for getBalanceByDebtorAccountNumber
     *
     * Gets balance of a Debtor by the given debtorAccountNumber.
     *
     */
    public function testGetBalanceByDebtorAccountNumber()
    {
    }

    /**
     * Test case for getDebtorsBalance
     *
     * Gets balance of a Debtor by the given debtorAccountNumber.
     *
     */
    public function testGetDebtorsBalance()
    {
    }

    /**
     * Test case for getImportExports
     *
     * Gets InvoiceExports of a Debtor by the given debtorAccountNumber.
     *
     */
    public function testGetImportExports()
    {
    }

    /**
     * Test case for getOpenPayments
     *
     * Method returns a paged list of open payments.  The paged result includes a summary and links to next and prevoius page..
     *
     */
    public function testGetOpenPayments()
    {
    }

    /**
     * Test case for getUpdatedImportExport
     *
     * Method returns InvoiceExport for currently due invoices.  Will create a new one of if one doesn't exist or if it is outdated.
     *
     */
    public function testGetUpdatedImportExport()
    {
    }

    /**
     * Test case for invoicesByDebtorApi
     *
     * Returns all invoices which has the given DebtorAccountNumber as the payer..
     *
     */
    public function testInvoicesByDebtorApi()
    {
    }

    /**
     * Test case for postOpenPayment
     *
     * Method adds an open payment with no invoice to match.
     *
     */
    public function testPostOpenPayment()
    {
    }
}
