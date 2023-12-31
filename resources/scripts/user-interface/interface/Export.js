import { useQuery } from 'react-query';
import { useState, useEffect } from '@wordpress/element';
import { CheckboxControl } from '@wordpress/components';
import apiFetch from '@wordpress/api-fetch';
import { Page } from './Page/Page';
import { Toolbar, ToolbarFlex, ToolbarTitle, ToolbarContent } from './Page/Toolbar';
import {
  Sidebar,
  SidebarGroup,
  SidebarCheckboxFlex,
  SidebarCheckboxItem,
} from './Page/Sidebar';
import { ButtonCopy } from './Export/ButtonCopy';
import { CodeBlock } from './Export/CodeBlock';
import { __ } from '../utils/wp';

const staticExports = intervention.route.export.data;

/**
 * Session Fn
 *
 * @description write/read session storage for `intervention-export-selection`.
 *
 * @param {array} write
 * @returns {null|array}
 */
const sessionFn = (write = false) => {
  const key = 'intervention-export-selection';

  if (write !== false) {
    sessionStorage.setItem(key, JSON.stringify(write));
    return;
  }

  return JSON.parse(sessionStorage.getItem(key));
};

/**
 * Query Fn
 *
 * @description query Intervention and WordPress data.
 *
 * @returns {object}
 */
const queryFn = async () => {
  return await apiFetch({
    url: intervention.route.export.url,
    method: 'POST',
    data: { selected: sessionFn() },
  });
};

/**
 * State Factory
 *
 * @description create state object from a `staticExports` group.
 *
 * @param {object} group
 * @param {boolean} state
 * @returns {object}
 */
const stateFactory = (group, state = false) => {
  return group.reduce((carry, item) => {
    carry[item.key] = state ? state.includes(item.key) : true;
    return carry;
  }, {});
};

/**
 * Get Keys Equal To True
 *
 * @description filter group items object to only get keys where state is `true`.
 *
 * @param {object} group
 * @returns {array}
 */
const getKeysEqualToTrue = (group) => {
  return Object.entries(group).reduce((carry, [k, v]) => {
    if (v === true) {
      carry.push(k);
    }
    return carry;
  }, []);
};

/**
 * Is All Checked
 *
 * @description deetermine if a group contains a false value.
 *
 * @returns {boolean}
 */
const isAllChecked = (group) => {
  return Object.values(group).includes(false);
};

/**
 * Export
 *
 * @description export WordPress database options to an Intervention config file.
 *
 * @returns <Export />
 */
const Export = () => {
  /**
   * Query
   */
  const query = useQuery('export', queryFn, {
    suspense: true,
  });

  const applicationKeys = Object.keys(stateFactory(staticExports.application));
  const session = sessionFn() || applicationKeys;

  /**
   * State
   */
  const [application, setApplication] = useState(
    stateFactory(staticExports.application, session)
  );

  /**
   * Effects
   *
   * @description merge groups, update session storage and refetch query from `UserInterface/Tools/Export.php`.
   */
  useEffect(() => {
    const selected = getKeysEqualToTrue(application);
    sessionFn(selected);
    query.refetch();
  }, [application]);

  /**
   * Write
   *
   * @description write state for group item checkbox.
   *
   * @param {object} group
   * @param {object} item
   */
  const write = (group, { key, state }) => {
    return Object.entries(group).reduce((carry, [k, v]) => {
      carry[k] = key === k ? state : v;
      return carry;
    }, {});
  };

  /**
   * Write All
   *
   * @description write state for group toggle all checkbox.
   *
   * @param {object} group
   */
  const writeAll = (group) => {
    const state = isAllChecked(group);
    return Object.entries(group).reduce((carry, [k]) => {
      carry[k] = state;
      return carry;
    }, {});
  };

  /**
   * Render
   */
  return (
    <Page>
      <Sidebar>
        <SidebarGroup title={__('Application')}>
          <SidebarCheckboxFlex>
            <SidebarCheckboxItem>
              <CheckboxControl
                label={__('Toggle All', 'intervention')}
                checked={!isAllChecked(application)}
                onChange={() => setApplication(writeAll(application))}
              />
            </SidebarCheckboxItem>

            {staticExports.application.map(({ key, title }) => (
              <SidebarCheckboxItem key={key}>
                <CheckboxControl
                  label={__(title)}
                  checked={application[key] ?? false}
                  onChange={(state) =>
                    setApplication(write(application, { key, state }))
                  }
                />
              </SidebarCheckboxItem>
            ))}
          </SidebarCheckboxFlex>
        </SidebarGroup>
      </Sidebar>

      {/* bugfix: w-full strangely wraps the sidebar on smaller screens, w-1/2 stops prismjs doing that */}
      <div className="flex-1 w-1/2">
        <Toolbar>
          <ToolbarFlex>
            <ToolbarTitle>{__('Export')}</ToolbarTitle>
            <ToolbarContent>{__('WordPress to Intervention')}</ToolbarContent>
          </ToolbarFlex>

          <ButtonCopy textToCopy={query.data} />
        </Toolbar>

        {query.isError && <>{__('Sorry, an error has occured')}.</>}

        {query.isSuccess && <CodeBlock>{query.data}</CodeBlock>}
      </div>
    </Page>
  );
};

export { Export, queryFn };
