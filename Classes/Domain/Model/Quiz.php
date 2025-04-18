<?php

declare(strict_types=1);

namespace Wacon\Mctest\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * This file is part of the "Mctest" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Kevin Chileong Lee <info@wacon.de>, Wacon Internet GmbH
 */
class Quiz extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Name of the quiz
     *
     * @var string
     */
    protected $name = '';

    /**
     * Questions
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wacon\Mctest\Domain\Model\Question>
     */
    protected $questions;

    public function __construct()
    {
        $this->questions = new ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return Quiz
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get questions
     *
     * @return  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wacon\Mctest\Domain\Model\Question>
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set questions
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wacon\Mctest\Domain\Model\Question>  $questions
     *
     * @return  self
     */
    public function setQuestions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Add a Question
     * @param \Wacon\Mctest\Domain\Model\Question $question
     * @return self
     */
    public function addQuestion(Question $question)
    {
        $this->questions->attach($question);
        return $this;
    }

    /**
     * Remove a Question
     * @param \Wacon\Mctest\Domain\Model\Question $question
     * @return self
     */
    public function removeQuestion(Question $question)
    {
        $this->questions->detach($question);
        return $this;
    }
}
