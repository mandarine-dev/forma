<?php
/** 
 * PDOStatementExtendedException.php
 * Generated by PhpStorm - 11/2014
 * Project PDOExtended
 * @author benoit.polaszek
**/

namespace BenTools\PDOExtended;


use Exception;

class PDOStatementExtendedException extends PDOExceptionExtended {

    /**
     * @var PDOStatementExtended
     */
    protected   $stmt;

    public function __construct($message = "", $code = 0, Exception $previous = null, PDOStatementExtended $stmt) {
        parent::__construct($message, (int) $code, $previous);
        $this->setStmt($stmt);
    }

    /**
     * @return PDOStatementExtended
     */
    public function getStmt() {
        return $this->stmt;
    }

    /**
     * @param PDOStatementExtended $stmt
     * @return $this - Provides Fluent Interface
     */
    public function setStmt($stmt) {
        $this->stmt = $stmt;
        return $this;
    }

}