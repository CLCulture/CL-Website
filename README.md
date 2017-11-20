# IVGAS-Website
Official repository for International Video Game and Anime Syndicate

## How to rewrite for IIS

We are using rewrite for the .php files.

We have ours setup as such in a file called web.config for [IIS](https://www.iis.net/):
```
<configuration>
    <system.webServer>
        <rewrite>
            <rules>
                <rule name="Redirect .php extension" stopProcessing="false">
                <match url="^(.*).php$" ignoreCase="true" />
                <conditions logicalGrouping="MatchAny">
                <add input="{URL}" pattern="(.*).php$" ignoreCase="false" />
                </conditions>
                <action type="Redirect" url="{R:1}" redirectType="Permanent" />
                </rule>
                <rule name="hide .php extension" stopProcessing="true">
                <match url="^(.*)$" ignoreCase="true" />
                <conditions>
                <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
                <add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
                <add input="{REQUEST_FILENAME}.php" matchType="IsFile" />
                </conditions>
                <action type="Rewrite" url="{R:0}.php" />
                </rule>
            </rules>
        </rewrite>
    </system.webServer>
</configuration>
```