<?php

namespace SevenTS\Greeting;

class Greeting
{
    /**
     * Returns the greeting "Good Morning"
     *
     * @return string
     */
    public function sayGoodMorning()
    {
        return "Good Morning";
    }

    /**
     * Returns a random inspirational quote
     *
     * @return string
     */
    public static function inspire()
    {
        $quotes = [
            "Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.",
            "Don't watch the clock; do what it does. Keep going.",
            "The only limit to our realization of tomorrow will be our doubts of today.",
            "You are never too old to set another goal or to dream a new dream.",
            "The future belongs to those who believe in the beauty of their dreams.",
            "Success is not final, failure is not fatal: It is the courage to continue that counts.",
            "The best way to predict the future is to invent it.",
            "The only way to do great work is to love what you do.",
            "Your time is limited, don't waste it living someone else's life.",
            "The secret to getting ahead is getting started.",
            "You miss 100% of the shots you don't take.",
            "In the middle of every difficulty lies opportunity.",
            "Believe you can and you're halfway there.",
            "The harder you work for something, the greater you'll feel when you achieve it.",
            "Success is not in what you have, but who you are.",
            "The only person you should try to be better than is the person you were yesterday.",
            "Challenges are what make life interesting and overcoming them is what makes life meaningful.",
            "The only limit to our realization of tomorrow will be our doubts of today.",
            "It's not whether you get knocked down, it's whether you get up.",
            "The best revenge is massive success.",
            "Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.",
            "Don't let yesterday take up too much of today.",
            "You can't have a better tomorrow if you're still thinking about yesterday.",
            "The best time to plant a tree was 20 years ago. The second best time is now.",
            "It's not what happens to you, but how you react to it that matters.",
            "The biggest risk is not taking any risk. In a world that's changing quickly, the only strategy that is guaranteed to fail is not taking risks.",
            "The only person you are destined to become is the person you decide to be.",
            "Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.",
            "Don't watch the clock; do what it does. Keep going.",
            "The only limit to our realization of tomorrow will be our doubts of today.",
            "You are never too old to set another goal or to dream a new dream.",
            "The future belongs to those who believe in the beauty of their dreams.",
            "Success is not final, failure is not fatal: It is the courage to continue that counts.",
            "The best way to predict the future is to invent it.",
            "The only way to do great work is to love what you do.",
            "Your time is limited, don't waste it living someone else's life.",
            "The secret to getting ahead is getting started.",
            "You miss 100% of the shots you don't take.",
            "In the middle of every difficulty lies opportunity.",
            "Believe you can and you're halfway there.",
            "The harder you work for something, the greater you'll feel when you achieve it.",
            "Success is not in what you have, but who you are.",
            "The only person you should try to be better than is the person you were yesterday.",
            "Challenges are what make life interesting and overcoming them is what makes life meaningful.",
            "The only limit to our realization of tomorrow will be our doubts of today.",
            "It's not whether you get knocked down, it's whether you get up.",
            "The best revenge is massive success.",
            "Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.",
            "Don't let yesterday take up too much of today.",
            "You can't have a better tomorrow if you're still thinking about yesterday.",
            "The best time to plant a tree was 20 years ago. The second best time is now.",
            "It's not what happens to you, but how you react to it that matters.",
            "The biggest risk is not taking any risk. In a world that's changing quickly, the only strategy that is guaranteed to fail is not taking risks.",
            "The only person you are destined to become is the person you decide to be."
        ];

        $randomIndex = rand(0, count($quotes) - 1);
        return $quotes[$randomIndex];
    }
}
