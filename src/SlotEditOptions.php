<?php

namespace WSSlots;

class SlotEditOptions {
    /**
     * @param string   $summary    The summary to use.
     * @param bool     $append     Whether to append to the current text.
     * @param string   $watchlist  Unconditionally add (watch) or remove (unwatch) the page from the current user's
     *                             watchlist, use preferences (preferences), or do not change watch (nochange).
     *                             Must be one of the following values: watch, unwatch, preferences, nochange.
     * @param bool     $prepend    Whether to prepend to the current text.
     * @param bool     $bot        Whether this edit should be marked as a bot edit.
     * @param bool     $minor      Whether this edit should be marked as minor.
     * @param bool     $createonly Don't edit the page if it exists already.
     * @param bool     $nocreate   Don't create the page if it doesn't exist already.
     * @param bool     $suppress   Whether to suppress the edit in recent changes.
     * @param string[] $tags       Change tags to apply to the revision.
     */
    public function __construct(
        public string $summary = '',
        public bool $append = false,
        public string $watchlist = 'nochange',
        public bool $prepend = false,
        public bool $bot = false,
        public bool $minor = false,
        public bool $createonly = false,
        public bool $nocreate = false,
        public bool $suppress = false,
        public array $tags = [],
    ) {}
}