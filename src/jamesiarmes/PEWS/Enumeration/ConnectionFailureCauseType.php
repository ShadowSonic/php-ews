<?php
/**
 * Contains \jamesiarmes\PEWS\EnumerationConnectionFailureCauseType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use jamesiarmes\PEWS\Enumeration;

/**
 * Specifies the reason for a disconnection from a telephone call.
 *
 * @package php-ews\Enumerations
 */
class ConnectionFailureCauseType extends Enumeration
{
    /**
     * The called party did not answer.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NO_ANSWER = 'NoAnswer';

    /**
     * Call state is not disconnected or the disconnect reason is not known.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Catch-all for other disconnect reasons.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const OTHER = 'Other';

    /**
     * The called party number was not available.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNAVAILABLE = 'Unavailable';

    /**
     * The called party line was busy.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const USER_BUSY = 'UserBusy';
}
