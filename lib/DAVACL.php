<?php
/*
 * SPDX-License-Identifier: AGPL-3.0-only
 * SPDX-FileCopyrightText: Copyright 2016 - 2018 Kopano b.v.
 * SPDX-FileCopyrightText: Copyright 2020 grammm GmbH
 *
 * grammm DAV ACL class.
 */

namespace grammm\DAV;

class DAVACL extends \Sabre\DAVACL\Plugin {

    /**
     * Returns the full ACL list.
     *
     * Either a uri or a DAV\INode may be passed.
     *
     * null will be returned if the node doesn't support ACLs.
     *
     * @param string|DAV\INode $node
     * @return array
     */
    public function getACL($node) {
            $acl = array(
                array(
                    'privilege' => '{DAV:}all',
                    'principal' => '{DAV:}authenticated',
                    'protected' => true,
                ),
            );
        return $acl;
    }
}
